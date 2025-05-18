<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComplaintNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $complaint;

    /**
     * Create a new message instance.
     *
     * @param  object  $complaint
     * @return void
     */
    public function __construct($complaint)
    {
        $this->complaint = $complaint;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Complaint Notification - ' . $this->complaint->tracking_id)
                    ->markdown('emails.complaint-notification');
    }
}
