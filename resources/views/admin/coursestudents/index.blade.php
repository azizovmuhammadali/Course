@extends('layout.admin')

@section('content')
<div class="container mt-5">
    <h2>Kurs O'quvchilari</h2>

    <a href="{{ route('coursestudents.create') }}" class="btn btn-success mb-3">Yangi kurs o'quvchisini qo'shish</a>

    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Student</th>
                <th>Kurs</th>
                <th>Ustoz</th>
                <th>Uy vazifa holati</th>
                <th>Oy</th>
                <th>Ma'lumot sanasi</th>
                 <th>To'lov holati</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coursestudents as $key => $coursestudent)
                <tr class="text-center">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $coursestudent->student->name}}</td>
                    <td>{{ $coursestudent->course->name }}</td>
                     <td>{{ $coursestudent->teacher->name }}</td>
                      <td>{{ $coursestudent->homework_status}}</td>
                      <td>{{ $coursestudent->month }}</td>
                      <td>{{ $coursestudent->date_at }}</td>
                      <td>{{ $coursestudent->payment_status }}</td>
                    <td class="d-flex justify-content-center gap-1">
                        <a href="{{ route('coursestudents.show', $coursestudent->id) }}" class="btn btn-info btn-sm">Ko‘rish</a>
                        <a href="{{ route('coursestudents.edit', $coursestudent->id) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                        <form action="{{ route('coursestudents.delete', $coursestudent->id) }}" method="POST" onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">O‘chirish</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
