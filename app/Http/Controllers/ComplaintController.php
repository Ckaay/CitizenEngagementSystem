<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;           // ← added
use App\Mail\ComplaintReceivedMail;             // ← added

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'address'   => 'required|string|max:255',
            'category'  => 'required|string|max:255',
            'complaint' => 'required|string',
            'email'     => 'nullable|email|required_without:phone',
            'phone'     => 'nullable|string|required_without:email',
        ], [
            'email.required_without' => 'Either email or phone number is required',
            'phone.required_without' => 'Either email or phone number is required',
        ]);

        // Create complaint
        $complaint = Complaint::create([
            'tracking_id'       => Str::upper(Str::random(8)),
            'full_name'         => $validated['full_name'],
            'address'           => $validated['address'],
            'category'          => $validated['category'],
            'complaint_details' => $validated['complaint'],
            'email'             => $validated['email'],
            'phone'             => $validated['phone'],
            'status'            => 'pending',
        ]);

            if ($complaint->email) {
            Mail::to($complaint->email)
                ->send(new \App\Mail\ComplaintNotificationMail($complaint));
        }

        return response()->json([
            'success'     => true,
            'tracking_id' => $complaint->tracking_id,
            'message'     => 'Complaint submitted successfully'
        ]);
    }
}
