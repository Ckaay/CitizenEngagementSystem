<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Mail\ComplaintResponseMail;
use Illuminate\Support\Facades\Mail;
 

class ComplaintResponseController extends Controller
{
    public function index(Request $request)
    {
        $categories = Complaint::select('category')->distinct()->pluck('category');
        $query = Complaint::query();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('full_name', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('tracking_id', 'LIKE', "%{$searchTerm}%");
            });
        }

        $complaints = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.complaints.index', compact('complaints', 'categories'));
    }

    public function show(Complaint $complaint)
    {
        return view('admin.complaints.show', compact('complaint'));
    }

    public function store(Request $request, Complaint $complaint)
    {
        $request->validate([
            'status' => 'required|in:pending,resolved,rejected',
            'feedback' => 'required|string|min:5',
            'response_message' => 'required|string|min:10',
        ]);

        $complaint->status = $request->status;
        $complaint->feedback = $request->feedback;
        $complaint->save();


        if ($complaint->email) {
    try {
        Mail::to($complaint->email)
            ->send(new ComplaintResponseMail($request->response_message, $complaint->tracking_id));
    } catch (\Exception $e) {
        return back()->withErrors(['email_error' => 'Failed to send email: ' . $e->getMessage()]);
    }
}


        return redirect()->route('admin.complaints.index')->with('success', 'Response submitted and saved successfully.');
    }
}
