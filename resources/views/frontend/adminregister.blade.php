<!-- resources/views/frontend/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f7f9fc;
            font-family: 'Poppins', sans-serif;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .register-card {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        .register-card h1 {
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
    </style>
</head>
<body>
 @session('error')
     <div class="alert alert-danger" role="alert">
        {{session('error')}}
</div>
 @endsession
    <div class="register-card mx-auto">
        <h1>Create an Account</h1>
        <form action="{{ route('admin.register.process') }}" method="POST">
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
            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>
            <div class="d-flex gap-15">
                <button type="submit" class="btn btn-primary-custom w-50">Register</button>
                <a href="{{ route('admin.login') }}" class="btn btn-outline-custom w-50">Log in</a>
            </div>
        </form>
    </div>
</body>
</html>
