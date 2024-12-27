<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tani.In - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            min-height: 100vh;
            background-color: #fff;
        }
        .login-form {
            padding: 40px;
            width: 100%;
            max-width: 450px;
        }
        .login-image {
            width: 50%;
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);
            background-size: cover;
            background-position: center;
        }
        .btn-login {
            background-color: #7AB730;
            border: none;
            padding: 12px;
            width: 100%;
            color: white;
            border-radius: 5px;
            font-weight: 500;
        }
        .form-control {
            padding: 12px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="d-flex login-container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="login-form">
                <h1 class="mb-2">Welcome to</h1>
                <h1 class="mb-4">Tani.In!</h1>
                <p class="text-muted mb-5">Mitra Cerdas Petani, Dari Bibit Hingga Panen</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-danger text-decoration-none">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn-login">LOGIN</button>
                    <p class="text-center mt-4 mb-0">
                        Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
        <div class="login-image" style="background-image: url('/images/rice-field.png')"></div>
    </div>
</body>
</html>
