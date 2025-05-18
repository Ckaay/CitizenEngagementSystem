@component('mail::message')
# Complaint Received

Hello,

Thank you for submitting your complaint with tracking ID **{{ $complaint->tracking_id }}**.

Our team will review your concern and get back to you shortly.

@component('mail::panel')
**Complaint Details:**  
{!! nl2br(e($complaint->description)) !!}
@endcomponent

If you have any questions, just reply to this email.

Thanks,<br>
Citizen Management System

@slot('footer')
<div style="font-size: 12px; color: #999; text-align: center; margin-top: 20px;">
    You received this email because you submitted a complaint via our platform.
</div>
@endslot
@endcomponent
