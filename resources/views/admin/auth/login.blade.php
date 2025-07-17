<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f9fc;
        }

        .login-box {
            margin-top: 80px;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #4c8bf5;
        }

        .btn-primary {
            background-color: #4c8bf5;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3a75d1;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-box">

                <h2 class="text-center mb-4">Admin Login</h2>

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('admins.login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email manzil</label>
                        <input type="email" name="email" class="form-control" placeholder="Email kiriting" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Parol</label>
                        <input type="password" name="password" class="form-control" placeholder="********" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Kirish</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
