@extends('layout.admin')
@section('content')
<div class="container">
    <h2>Kurs O'quvchisi haqida ma'lumot</h2>
    <div class="card mt-4">
        <div class="card-body">
            <p><strong>👨‍🎓 O‘quvchi:</strong> {{ $activestudent->student->name }}</p>
            <p><strong>📚 Kurs:</strong> {{ $activestudent->course->name }}</p>
            <p><strong>💰 To‘lov summasi:</strong> {{ $activestudent->payment_amount}}</p>
            <p><strong>📖 O‘tilgan darslar:</strong> {{ $activestudent->lesson_passed }}</p>
            <p><strong>🧾 To‘langan darslar:</strong> {{ $activestudent->lesson_paid }}</p>
            <p><strong>📉 Qoldiq darslar:</strong> {{ $activestudent->lesson_debt_count }}</p>
            <p><strong>💸 Qoldiq summa:</strong> {{ $activestudent->lesson_debt_sum }}</p>
            <p><strong>📆 Oy:</strong> {{ $activestudent->month }}</p>
        </div>
    </div>
    <a href="{{ route('activestudents.index') }}" class="btn btn-secondary mt-3">Orqaga</a>
</div>
@endsection
