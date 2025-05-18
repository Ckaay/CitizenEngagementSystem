<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Complaint;
use App\Models\Agency;
 

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $stats = [
                'total_users' => User::count(),
                'active_users' => $this->getActiveUsersCount(),
                'total_complaints' => Complaint::count(),
                'pending_complaints' => $this->getPendingComplaintsCount(),
                'agencies_count' => Agency::count(),
            ];

            $recentComplaints = Complaint::with('user')
                ->latest()
                ->take(5)
                ->get();

            return view('admin.dashboard', compact('stats', 'recentComplaints'));

        } catch (\Exception $e) {
            // Log error and show a safe fallback
            \Log::error('Dashboard error: '.$e->getMessage());
            
            return view('admin.dashboard')
                ->with('error', 'Could not load all dashboard data')
                ->with('stats', [
                    'total_users' => 'N/A',
                    'active_users' => 'N/A',
                    'total_complaints' => 'N/A',
                    'pending_complaints' => 'N/A',
                    'agencies_count' => 'N/A'
                ]);
        }
    }

    protected function getActiveUsersCount()
    {
        // Check if status column exists
        if (\Schema::hasColumn('users', 'status')) {
            return User::where('status', 'active')->count();
        }
        return User::count(); // Fallback to total count
    }

    protected function getPendingComplaintsCount()
    {
        // Check if status column exists
        if (\Schema::hasColumn('complaints', 'status')) {
            return Complaint::where('status', 'pending')->count();
        }
        return 0; // Default value if column doesn't exist
    }
}