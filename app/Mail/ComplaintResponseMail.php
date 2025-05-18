<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComplaintResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $responseMessage;
    public $trackingId;

    public function __construct($responseMessage, $trackingId)
    {
        $this->responseMessage = $responseMessage;
        $this->trackingId = $trackingId;
    }

    public function build()
    {
        return $this->subject('Response to your complaint - ' . $this->trackingId)
                    ->markdown('emails.complaint_response');
    }
}
