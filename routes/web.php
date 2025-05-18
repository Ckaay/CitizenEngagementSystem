<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\Frontend\ComplaintTrackingController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AgencyUserController;
use App\Http\Controllers\Admin\ComplaintResponseController;
use App\Http\Middleware\EnsureSuperAdmin;
use App\Http\Middleware\EnsureAgencyUser;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Language switch
Route::get('lang/{locale}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// Submit a new complaint
Route::post('complaints', [ComplaintController::class, 'store'])
    ->name('complaints.store')
    ->middleware('throttle:3,1');

// Track a complaint via modal form on home
Route::post('track-result', [ComplaintTrackingController::class, 'track'])
    ->name('track.result');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // /admin → dashboard or login
    Route::match(['get', 'head'], '/', function () {
        return auth()->check()
            ? redirect()->route('admin.dashboard')
            : redirect()->route('admin.login');
    })->name('home');

    // Guest-only: login & OTP
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'showLoginForm'])
            ->name('login')
            ->middleware('throttle:10,1');
        Route::post('login', [AuthController::class, 'login'])
            ->name('login.submit')
            ->middleware('throttle:10,1');

        Route::get('verify-otp', [AuthController::class, 'showOtpForm'])
            ->name('otp.verify');
        Route::post('verify-otp', [AuthController::class, 'verifyOtp'])
            ->name('otp.submit')
            ->middleware('throttle:10,1');
        Route::post('resend-otp', [AuthController::class, 'resendOtp'])
            ->name('otp.resend')
            ->middleware('throttle:3,1');
    });

    // Authenticated admin: dashboard & logout
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::post('logout', [AuthController::class, 'logout'])
            ->name('logout');
    });

    // SuperAdmin only: manage agency users
    Route::middleware(['auth', 'verified', EnsureSuperAdmin::class])->group(function () {
        Route::resource('agency-users', AgencyUserController::class)
            ->except(['show']);
    });

    // AgencyUser only: view/respond to complaints
    Route::middleware(['auth', 'verified', EnsureAgencyUser::class])
        ->prefix('complaints')
        ->name('complaints.')
        ->group(function () {
            Route::get('/', [ComplaintResponseController::class, 'index'])
                ->name('index');
            Route::get('{complaint}', [ComplaintResponseController::class, 'show'])
                ->name('show');
            Route::post('{complaint}/response', [ComplaintResponseController::class, 'store'])
                ->name('response');
        });

    // Fallback for any other /admin/* routes
    Route::fallback(function () {
        return auth()->check()
            ? redirect()->route('admin.dashboard')->withErrors('Page not found')
            : redirect()->route('admin.login');
    });
});

/*
|--------------------------------------------------------------------------
| Global Fallback
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return redirect()->route('home')->withErrors('The requested page was not found');
});
