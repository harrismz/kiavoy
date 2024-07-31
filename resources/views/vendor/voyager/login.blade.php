<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            display: flex;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        .login-image {
            width: 40%;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .login-image img {
            max-width: 100%;
            height: auto;
        }
        .login-form {
            width: 60%;
            padding: 40px;
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .login-form .form-group {
            margin-bottom: 15px;
        }
        .login-form .form-group label {
            font-weight: bold;
        }
        .login-form .btn {
            width: 100%;
            padding: 10px;
        }
        .login-form .text-center {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="{{ url("/storage/images/buku_kia.png") }}" alt="Logo">
        </div>
        <div class="login-form">
            <h2>Login</h2>
            <p>Pastikan anda sudah memiliki akun.</p>
            <form method="POST" action="{{ route('voyager.login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group text-right">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="text-center">
                <p>Belum punya akun? <a href="{{ url('/registration') }}">Buat akun sekarang</a></p>
            </div>
        </div>
    </div>
</body>
</html>
