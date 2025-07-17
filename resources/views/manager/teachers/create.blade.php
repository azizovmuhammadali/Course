<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>O'qituvchi Yaratish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <h3 class="mb-4 text-center">Yangi O'qituvchi Qo‘shish</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('teachers.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Oqituvchi ismi</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Oqituvchi ismini kiriting" required>
        </div>

         <div class="mb-3">
        <label for="description" class="form-label">Ma'lumotlar</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Oqituvchi haqida malumot kiriting" required>
    </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Oqituvchi raqami</label>
            <input type="number" name="phone" id="phone" class="form-control" placeholder="Oqitubchi raqamini kiriting" required>
<div class="d-flex gap-2">
    <a href="{{ route('manager.teachers') }}" class="btn btn-secondary w-50">⬅ Ortga</a>
    <button type="submit" class="btn btn-success w-50">💾 Saqlash</button>
</div>
    </form>
</div>

</body>
</html>
