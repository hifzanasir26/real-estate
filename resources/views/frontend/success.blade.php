@extends('frontend.layout.layout')

@section('content')
    <style>
        /* Only style the success box, not the whole body */
        .success-page {
            text-align: center;
            padding: 50px 0;
        }
        .success-box {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: background 0.3s, color 0.3s;
            max-width: 500px;
            margin: auto;
        }
        .success-box h1 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        .success-box p {
            color: var(--muted-text);
            margin-bottom: 20px;
        }
        .success-box a {
            color: var(--link-color);
            text-decoration: none;
            font-weight: bold;
        }
        .success-box a:hover {
            background: var(--hover-bg);
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>

    <div class="success-page">
        <div class="success-box">
            <h1>✅ Email Sent Successfully!</h1>
            <p>Your inquiry has been submitted and the email has been sent to the agent.</p>
            <a href="{{ route('home.index') }}">Go Back to Home</a>
        </div>
    </div>
@endsection
