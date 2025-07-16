<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Kurs Tafsilotlari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h3 class="mb-4">Kurs Tafsilotlari</h3>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
             <p class="card-text">
                <strong>Narxi:</strong>
                {{ number_format((float)str_replace('.', '', $course->price), 0, ',', ' ') }} so‘m</p>
            <p class="card-text"><strong>Darslik:</strong> {{ $course->period }}</p>
            <a href="{{ route('manager.courses') }}" class="btn btn-secondary">Ortga</a>
        </div>
    </div>
</div>
</body>
</html>
