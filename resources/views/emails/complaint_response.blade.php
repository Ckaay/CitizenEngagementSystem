<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Complaint Response</title>
  <style>
    /* General resets */
    body, p, div {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333333;
      background-color: #f9fafb;
    }
    body {
      padding: 20px;
    }
    .container {
      max-width: 600px;
      background: #ffffff;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    header {
      background: #1d4ed8;
      color: #ffffff;
      text-align: center;
      padding: 20px;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 1px;
    }
    .content {
      padding: 30px 40px;
      line-height: 1.6;
      font-size: 16px;
    }
    .tracking-id {
      background: #e0e7ff;
      border-left: 5px solid #1d4ed8;
      padding: 15px 20px;
      font-weight: 600;
      font-size: 18px;
      margin: 20px 0;
      color: #1e3a8a;
    }
    .response-message {
      background: #f3f4f6;
      border-radius: 6px;
      padding: 20px;
      font-size: 15px;
      color: #374151;
      white-space: pre-wrap;
      margin-bottom: 30px;
    }
    .footer {
      text-align: center;
      font-size: 12px;
      color: #6b7280;
      padding: 15px 40px 30px 40px;
      border-top: 1px solid #e5e7eb;
    }
    a.button {
      display: inline-block;
      background: #2563eb;
      color: white !important;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 4px 10px rgb(37 99 235 / 0.4);
      transition: background-color 0.3s ease;
      margin-top: 10px;
    }
    a.button:hover {
      background-color: #1e40af;
    }
  </style>
</head>
<body>
  <div class="container" role="article" aria-roledescription="email" aria-label="Complaint response email">
    <header>
      {{ config('app.name') }} Support
    </header>
    <section class="content">
      <p>Hello,</p>
      <p>Thank you for contacting us. Here is the update regarding your complaint with tracking ID:</p>
      <div class="tracking-id">{{ $trackingId }}</div>
      <div class="response-message">{!! nl2br(e($responseMessage)) !!}</div>

      <p>If you have any more questions or need further assistance, please don't hesitate to reply to this email.</p>

      <a href="{{ config('app.url') }}" class="button" target="_blank" rel="noopener">Visit Our Website</a>
    </section>

    <footer class="footer">
      You received this email because you submitted a complaint via our platform.
    </footer>
  </div>
</body>
</html>
