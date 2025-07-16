<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Manager Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h4 class="text-center mb-4">Manager Kirish</h4>

        {{-- Xatoliklar --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('manager.login.submit') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email manzil</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Emailingizni kiriting" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Parol</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Parolingizni kiriting" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Kirish</button>
        </form>
    </div>
</div>

</body>
</html>
