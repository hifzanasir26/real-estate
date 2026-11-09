<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Password Reset</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        h2 {
            color: #0d6efd;
        }

        p {
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #0d6efd;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
        }

    </style>
</head>
<body>
    <div class="email-container">
        <h2>Hello,</h2>
        <p>We received a request to reset your password for your account.</p>
        <p>If you made this request, please confirm it by clicking the button below:</p>

        <a href="{{ route('custom.confirm.reset', $token) }}" class="btn">Yes, Reset My Password</a>

        <p>If you did not request a password reset, please ignore this email. No changes will be made to your account.</p>

        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
