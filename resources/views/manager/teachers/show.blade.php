<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Oqituvchi Tafsilotlari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h3 class="mb-4">Oqituvchi Tafsilotlari</h3>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $teacher->name }}</h5>
            <p class="card-text"><strong>Ma'lumotlar:</strong> {{ $teacher->description }}</p>
             <p class="card-text">
                <strong>Rqami:{{ $teacher->phone }}</strong> </p>
            <a href="{{ route('manager.teachers') }}" class="btn btn-secondary">Ortga</a>
        </div>
    </div>
</div>
</body>
</html>
