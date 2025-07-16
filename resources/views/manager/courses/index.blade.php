<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Kurslar Ro'yxati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📚 Kurslar Ro'yxati</h2>
        <a href="{{ route('manager.courses.create') }}"
           class="btn btn-success text-white px-4 shadow-sm">
            + Yangi kurs
        </a>
    </div>

    @if($courses->count())
        <table class="table table-bordered align-middle text-center shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nomi</th>
                    <th>Narxi (so'm)</th>
                    <th>Davomiyligi</th>
                    <th>Amallar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $index => $course)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $course->name }}</td>
                        <td>{{ number_format($course->price, 0, ',', ' ') }} so‘m</td>
                        <td>Darslik: {{ $course->period }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('manager.courses.show', $course->id) }}"
                                   class="btn btn-sm btn-info text-white">Ko‘rish</a>
                                <a href="{{ route('manager.courses.update', $course->id) }}"
                                   class="btn btn-sm btn-warning text-white">Tahrirlash</a>
                                <form method="POST" action="{{ route('manager.courses.delete', $course->id) }}"
                                      onsubmit="return confirm('Kursni o‘chirishga ishonchingiz komilmi?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">O‘chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info text-center">
            Hozircha kurslar mavjud emas. <br>
            <a href="{{ route('manager.courses.create') }}" class="btn btn-success mt-3">
                Yangi kurs yaratish
            </a>
        </div>
    @endif
</div>
</body>
</html>
