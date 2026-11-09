<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Real Estate | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #a18cd1, #fbc2eb); /* soft blue to violet */
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 15px;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .login-box h1 {
            text-align: center;
            color: #5e60ce; /* Indigo */
            font-weight: 600;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 500;
        }

        .form-control:focus {
            border-color: #5e60ce;
            box-shadow: 0 0 0 0.2rem rgba(94, 96, 206, 0.25);
        }

        .btn-custom {
            background-color: #5e60ce;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #4e52b4;
        }

        .btn-custom a {
            color: white;
            text-decoration: none;
            display: block;
        }

        .btn-custom a:hover {
            color: #e0e0e0;
        }

        .input-group-text {
            background-color: #fff;
            border-left: none;
            cursor: pointer;
        }

        .input-group .form-control {
            border-right: none;
        }

        .alert {
            font-size: 14px;
            padding: 10px;
        }

        .text-end a {
            color: #5e60ce;
            text-decoration: none;
        }

        .text-end a:hover {
            color: #4e52b4;
        }

        @media (max-width: 400px) {
            .login-box {
                padding: 30px 20px;
            }

            .login-box h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h1> Login</h1>

        @if ($errors->has('login'))
            <div class="alert alert-danger text-center">
                {{ $errors->first('login') }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" id="passwordInput" required>
                    <span class="input-group-text" id="togglePassword">👁️</span>
                </div>
                <div class="text-end mt-2">
                    <a href="{{ route('custom.forgot') }}">Forgot Password?</a>
                </div>
            </div>

            <div class="d-flex gap-3 mt-4">
                <button type="submit" class="btn btn-custom w-50">Login</button>
                <a href="{{ route('register') }}" class="btn btn-custom w-50 text-center">Register</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('passwordInput');
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';
            this.textContent = isPassword ? '🙈' : '👁️';
        });

        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) alert.style.display = 'none';
        }, 3000);
    </script>
</body>

</html>
