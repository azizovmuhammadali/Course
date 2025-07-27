@extends('layout.admin')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">📋 Faol O‘quvchilar Ro‘yxati</h3>
    <a href="{{ route('activestudents.create') }}" class="btn btn-success mb-3">
        ➕ Yangi faol o‘quvchi qo‘shish
    </a>

    <div class="table-responsive shadow">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>#</th>
                    <th>👨‍🎓 O‘quvchi</th>
                    <th>📚 Kurs</th>
                    <th>💰 To‘lov summasi</th>
                    <th>📖 O‘tilgan darslar</th>
                    <th>🧾 To‘langan darslar</th>
                    <th>📉 Qoldiq darslar</th>
                    <th>💸 Qoldiq summa</th>
                    <th>📆 Oy</th>
                    <th>⚙️ Amallar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activeStudents as $activestudent)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $activestudent->student->name }}</td>
                    <td>{{ $activestudent->course->name }}</td>
                    <td>{{ number_format($activestudent->payment_amount) }} so'm</td>
                    <td>{{ $activestudent->lesson_passed }} ta</td>
                    <td>{{ $activestudent->lesson_paid }} ta</td>
                    <td>{{ $activestudent->lesson_debt_count }} ta</td>
                    <td>{{ number_format($activestudent->lesson_debt_sum) }} so'm</td>
                    <td>{{ $activestudent->month }}-oy</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('activestudents.show', $activestudent->id) }}" class="btn btn-warning btn-sm">
                                ✏️ Korsatish
                            </a>
                            <a href="{{ route('activestudents.edit', $activestudent->id) }}" class="btn btn-warning btn-sm">
                                ✏️ Tahrirlash
                            </a>
                            <form action="{{ route('activestudents.delete', $activestudent->id) }}" method="POST"
                                  onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">🗑 O‘chirish</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
