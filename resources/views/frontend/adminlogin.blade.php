<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f7f9fc;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        .login-card h1 {
            font-size: 28px;
            font-weight: 600;
            color: #333333;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 6px;
            color: #444;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: none;
        }

        .btn-primary-custom {
            background-color: #0d6efd;
            border: none;
            color: #fff;
            font-weight: 500;
            padding: 10px 0;
            border-radius: 12px;
            transition: background-color 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: #0b5ed7;
        }

        .btn-outline-custom {
            background-color: transparent;
            color: #0d6efd;
            border: 2px solid #0d6efd;
            font-weight: 500;
            border-radius: 12px;
            padding: 10px 0;
            text-decoration: none;
            display: block;
            text-align: center;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background-color: #0d6efd;
            color: white;
        }

        .gap-15 {
            gap: 15px;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h1>Login</h1>

        @if ($errors->any())
            <div class="alert alert-danger text-center">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-4 position-relative">
                <label class="form-label">Password</label>
                <input type="password" class="form-control pe-5" name="password" id="passwordField" required>
                <i class="fa-solid fa-eye password-toggle" id="toggleIcon" onclick="togglePassword()"></i>

                <div class="text-end mt-2">
                    <a href="{{route('custom.forgot')}}" class="text-decoration-none text-primary" style="font-size: 14px;">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <div class="d-flex gap-15">
                <button type="submit" class="btn btn-primary-custom w-50">Login</button>
                <a href="{{ route('admin.register') }}" class="btn btn-outline-custom w-50">Register</a>
            </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('passwordField');
            const icon = document.getElementById('toggleIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

</body>

</html>
