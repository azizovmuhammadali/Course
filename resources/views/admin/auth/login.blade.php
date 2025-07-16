<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Admin Login</h2>

    <div id="message"></div>
    <form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input name="email" type="email">
    <input name="password" type="password">
    <button type="submit">Kirish</button>
</form>
</div>

<script>

</script>
</body>
</html>
