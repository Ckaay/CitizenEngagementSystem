<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminOTP;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return $this->redirectToDashboard(Auth::user());
        }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        try {
            if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
                $user = Auth::user();

                // Check if user has valid role
                if (!in_array($user->role, ['SuperUser', 'AgencyUser'])) {
                    Auth::logout();
                    return back()->withErrors(['email' => 'Unauthorized access']);
                }

                // Immediately log out and start OTP process for AgencyUser
                if ($user->role === 'AgencyUser') {
                    Auth::logout(); // Important: Log out before OTP process
                    return $this->initiateOtpProcess($user);
                }

                // SuperUser goes directly to dashboard
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Welcome back, Administrator!');
            }

            return back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors(['email' => 'Invalid credentials']);

        } catch (\Exception $e) {
            Log::error('Login error: '.$e->getMessage());
            return back()->withErrors(['email' => 'Login failed. Please try again.']);
        }
    }

    public function showOtpForm()
    {
        if (!$this->hasValidOtpSession()) {
            return redirect()->route('admin.login')
                ->withErrors(['otp' => 'OTP session expired. Please login again.']);
        }

        return view('admin.auth.otp', [
            'email' => session('otp_email'),
            'resend_url' => route('admin.otp.resend'),
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|numeric|digits:6']);

        try {
            if (!$this->hasValidOtpSession()) {
                return redirect()->route('admin.login')
                    ->withErrors(['otp' => 'OTP session expired. Please login again.']);
            }

            if ($request->otp != session('admin_otp')) {
                return back()->withErrors(['otp' => 'Invalid OTP code. Please try again.']);
            }

            // Mark user as verified in session
            session(['otp_verified' => true]);
            
            return $this->processSuccessfulVerification();

        } catch (\Exception $e) {
            Log::error('OTP verification error: '.$e->getMessage());
            return back()->withErrors(['otp' => 'An error occurred. Please try again.']);
        }
    }

    public function resendOtp()
    {
        try {
            if (!$this->hasValidOtpSession()) {
                return redirect()->route('admin.login')
                    ->withErrors(['otp' => 'Session expired. Please login again.']);
            }

            $newOtp = rand(100000, 999999);
            Mail::to(session('otp_email'))->send(new AdminOTP($newOtp));

            session([
                'admin_otp' => $newOtp,
                'otp_expires_at' => now()->addMinutes(10)
            ]);

            return back()->with('status', 'A new OTP has been sent to your email.');

        } catch (\Exception $e) {
            Log::error('OTP resend error: '.$e->getMessage());
            return back()->withErrors(['otp' => 'Failed to resend OTP. Please try again.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    private function initiateOtpProcess($user)
    {
        $otp = rand(100000, 999999);
        
        session([
            'admin_otp' => $otp,
            'otp_user_id' => $user->id,
            'otp_email' => $user->email,
            'otp_expires_at' => now()->addMinutes(10),
            'intended_dashboard' => 'admin.dashboard'
        ]);

        Mail::to($user->email)->send(new AdminOTP($otp));

        return redirect()->route('admin.otp.verify')
            ->with('status', 'An OTP has been sent to your email.');
    }

    private function hasValidOtpSession()
    {
        return session('admin_otp') && 
               session('otp_user_id') && 
               now()->lt(session('otp_expires_at'));
    }

    private function processSuccessfulVerification()
    {
        $userId = session('otp_user_id');
        $dashboard = session('intended_dashboard', 'admin.dashboard');

        // Clear OTP session data
        session()->forget([
            'admin_otp',
            'otp_user_id',
            'otp_email',
            'otp_expires_at',
            'intended_dashboard'
        ]);

        // Log the user in and mark as verified
        Auth::loginUsingId($userId);
        session(['otp_verified' => true]);

        return redirect()->route($dashboard)
            ->with('success', 'Login successful! Welcome back.');
    }
}