<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #34495e); /* Warna latar belakang yang gelap dan elegan */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2c3e50; /* Sesuaikan warna dengan tema */
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #34495e; /* Warna label yang lebih gelap */
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input:focus {
            border-color: #1abc9c; /* Warna biru-hijau saat fokus */
            outline: none;
            box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
        }
        .btn-login {
            background: #1abc9c; /* Tombol dengan warna biru-hijau */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        .btn-login:hover {
            background: #16a085; /* Warna lebih gelap saat hover */
        }
        .forgot-password {
            margin-top: 15px;
            font-size: 14px;
        }
        .forgot-password a {
            color: #1abc9c; /* Warna hijau biru pada link */
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
            <div class="forgot-password">
                <a href="#">Forgot your password?</a>
            </div>
        </form>
    </div>
</body>
</html>