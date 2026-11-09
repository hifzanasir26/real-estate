<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Real Estate | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #a18cd1, #fbc2eb);
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 15px;
        }

        .register-box {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .register-box h1 {
            text-align: center;
            color: #5e60ce;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 6px;
        }

        .form-control:focus {
            border-color: #5e60ce;
            box-shadow: 0 0 0 0.2rem rgba(94, 96, 206, 0.25);
        }

        .btn-custom {
            background-color: #5e60ce;
            color: white;
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

        @media (max-width: 400px) {
            .register-box {
                padding: 30px 20px;
            }

            .register-box h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="register-box">
        <h1>Register</h1>

        <form action="{{ route('register.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>

            <div class="d-flex gap-3 mt-4">
                <button type="submit" class="btn btn-custom w-50">Register</button>
                <a href="{{ route('login') }}" class="btn btn-custom w-50 text-center">Log in</a>
            </div>
        </form>
    </div>
</body>

</html>
