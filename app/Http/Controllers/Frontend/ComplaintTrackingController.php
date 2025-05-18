<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintTrackingController extends Controller
{
    public function form()
    {
        return view('frontend.track.form');
    }

    public function track(Request $request)
{
if (!$request->track_id || !Complaint::where('tracking_id', $request->track_id)->exists()) {
  return redirect('/')->with('track_error', 'Invalid Track ID!');

}



    $complaint = Complaint::where('tracking_id', $request->track_id)->first();

    return view('frontend.track.result', compact('complaint'));
}

}
