<?php

namespace App\Mail;

use App\Models\Complaint;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComplaintReceivedMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var Complaint */
    public $complaint;

    public function __construct(Complaint $complaint)
    {
        $this->complaint = $complaint;
    }

    public function build()
    {
        return $this
            ->subject('Your Complaint Has Been Received')
            ->view('emails.complaint_received');
    }
}
