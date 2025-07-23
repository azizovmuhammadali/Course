@extends('layout.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 500px;">
        <h3 class="text-center mb-4 text-primary">💳 To‘lov Qo‘shish</h3>

        <form action="{{ route('payments.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="student_id" class="form-label">👤 Talaba</label>
                <select name="student_id" class="form-select @error('student_id') is-invalid @enderror" required>
                    <option value="">-- Tanlang --</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
                @error('student_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="course_list_id" class="form-label">📘 Kurs</label>
                <select name="course_list_id" class="form-select @error('course_list_id') is-invalid @enderror" required>
                    <option value="">-- Tanlang --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
                @error('course_list_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="payment_sum" class="form-label">💰 To'lov miqdori (UZS)</label>
                <input type="number" name="payment_sum" class="form-control @error('payment_sum') is-invalid @enderror" required>
                @error('payment_sum')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lesson_count_paid" class="form-label">📚 Darslar soni</label>
                <input type="number" name="lesson_count_paid" class="form-control @error('lesson_count_paid') is-invalid @enderror" required>
                @error('lesson_count_paid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="month" class="form-label">🗓️ Oy</label>
                <input type="text" name="month" class="form-control @error('month') is-invalid @enderror" placeholder="Masalan: Iyul 2025" required>
                @error('month')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                     <div class="mb-3">
            <label for="date_at" class="form-label">🗓️ To‘lov sanasi</label>
            <input type="date" name="date_at" class="form-control" required>
        </div>
<div class="d-grid gap-2 mt-3">

    <a href="{{ route('payments.index') }}" class="btn btn-secondary btn-lg w-100">
        ⬅️ Orqaga
    </a>
    <button type="submit" class="btn btn-success btn-lg w-100">
        💾 Saqlash
    </button>
</div>
</div>
@endsection
