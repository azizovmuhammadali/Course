<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Kurs Yaratish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <h3 class="mb-4 text-center">Yangi Kurs Qo‘shish</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('manager.courses.updated',$course->id) }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Kurs nomi</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="{{$course->name}}" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Kurs narxi</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="{{$course->price}}" >
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Kurs davomiyligi</label>
            <input type="number" name="period" id="period" class="form-control" placeholder=" {{ $course->period }} darslik" >
        </div>
    <div class="d-flex gap-2">
    <a href="{{ route('manager.courses') }}" class="btn btn-secondary w-50">⬅ Ortga</a>
    <button type="submit" class="btn btn-success w-50">💾 Saqlash</button>
</div>
    </form>
</div>

</body>
</html>
