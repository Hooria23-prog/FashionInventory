<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FashionInventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .login-card {
            width: 380px;
            padding: 30px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            color: #fff;
        }
        .login-card h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .form-control:focus {
            background: transparent;
            box-shadow: none;
            border-color: #00d4ff;
        }
        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #0072ff, #00d4ff);
            border: none;
            padding: 10px;
            font-weight: bold;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #00d4ff, #0072ff);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h3>Welcome Back</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label for="remember" class="form-check-label">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>

