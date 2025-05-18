<?php
 

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AdminOTP extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->view('emails.otp')
                   ->subject('Your OTP Code');
    }

    // Optional: Direct PHPMailer integration
    public function sendWithPhpMailer()
    {
        $mail = new PHPMailer(true);
        
        try {
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port       = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($this->to[0]['address']);
            
            $mail->isHTML(true);
            $mail->Subject = 'Your OTP Code';
            $mail->Body    = view('emails.otp', ['otp' => $this->otp])->render();

            $mail->send();
            return true;
        } catch (Exception $e) {
            logger()->error("PHPMailer Error: {$mail->ErrorInfo}");
            return false;
        }
    }
}