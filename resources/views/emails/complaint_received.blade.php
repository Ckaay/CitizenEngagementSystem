<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Complaint Received</title>
</head>
<body>
    <p>Hi {{ $complaint->full_name }},</p>

    <p>We have received your complaint. Your tracking ID is:</p>
    <h2>{{ $complaint->tracking_id }}</h2>

    <p>You can use this ID to track your complaint status at any time.</p>

    <hr>

    <p>Details you submitted:</p>
    <ul>
        <li><strong>Address:</strong> {{ $complaint->address }}</li>
        <li><strong>Category:</strong> {{ $complaint->category }}</li>
        <li><strong>Complaint:</strong> {{ $complaint->complaint_details }}</li>
    </ul>

    <p>Thank you for reaching out to us.</p>
    <p>— Citizen Engagement Team</p>
</body>
</html>
