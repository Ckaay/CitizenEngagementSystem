<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>OTP Verification</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f4f6fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
    .container {
      max-width: 480px;
      margin: 40px auto;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      padding: 30px 40px;
      text-align: center;
    }
    h2 {
      color: #2a2f78;
      font-weight: 700;
      margin-bottom: 10px;
    }
    p {
      font-size: 16px;
      line-height: 1.5;
      margin: 10px 0 25px;
      color: #555;
    }
    .otp-code {
      display: inline-block;
      padding: 15px 35px;
      font-size: 28px;
      font-weight: 700;
      letter-spacing: 6px;
      background: #2a2f78;
      color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(42, 47, 120, 0.3);
      user-select: all;
      margin-bottom: 25px;
    }
    .footer {
      font-size: 14px;
      color: #999;
      margin-top: 30px;
    }
    @media screen and (max-width: 520px) {
      .container {
        margin: 20px 15px;
        padding: 20px;
      }
      .otp-code {
        font-size: 24px;
        padding: 12px 30px;
        letter-spacing: 4px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Your One-Time Password</h2>
    <p>Use this code to verify your account:</p>
    <div class="otp-code">{{ $otp }}</div>
    <p class="footer">This code expires in 10 minutes.</p>
  </div>
</body>
</html>
