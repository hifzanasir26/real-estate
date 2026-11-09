<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f0f2f5, #e0e7ff);
            font-family: 'Segoe UI', sans-serif;
        }

        .reset-card {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 420px;
            width: 100%;
        }

        .form-label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #0d6efd;
            border: none;
            font-weight: 500;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="reset-card">
        <h4 class="text-center mb-4">Reset Your Password</h4>

        @if ($errors->any())
            <div class="alert alert-danger mb-2">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('custom.password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="type" value="{{ $type }}">


            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-custom w-100">Reset Password</button>
        </form>

        <div class="text-center mt-3">
<a href="{{ $type == 'admin' ? route('admin.login') : route('login') }}" class="text-decoration-none">Back to Login</a>
        </div>
    </div>

</body>

</html>
