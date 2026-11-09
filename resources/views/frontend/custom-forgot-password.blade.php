<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            font-family: 'Segoe UI', sans-serif;
        }

        .forgot-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 420px;
            width: 100%;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-custom {
            background-color: #0d6efd;
            border: none;
            font-weight: 500;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
        }

        input[type="email"] {
            border-radius: 10px;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="forgot-card">
        <h4 class="text-center mb-4">Forgot Your Password?</h4>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mb-2">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('custom.forgot.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Enter your email address</label>
                <input type="email" name="email" class="form-control" required placeholder="e.g. your@email.com">
            </div>

            <button type="submit" class="btn btn-custom w-100">Send Confirmation</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
        </div>
    </div>

</body>

</html>
