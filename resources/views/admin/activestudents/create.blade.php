@extends('layout.admin')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4 text-success">➕ Faol o‘quvchini qo‘shish</h3>

    <form action="{{ route('activestudents.store') }}" method="POST">
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

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">💰 To‘lov summasi</label>
                <input type="number" name="payment_amount" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">📖 O‘tilgan darslar</label>
                <input type="number" name="lesson_passed" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">💸 Qarz summasi</label>
                <input type="number" name="lesson_debt_sum" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">🧾 To‘langan darslar</label>
                <input type="number" name="lesson_paid" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">📉 Qoldiq darslar soni</label>
                <input type="number" name="lesson_debt_count" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">📆 Oy raqami</label>
                <input type="text" name="month" class="form-control" min="1" max="12" required>
            </div>
        </div>
           <a href="{{ route('activestudents.index') }}" class="btn btn-secondary btn-lg w-100">
        ⬅️ Orqaga
    </a>
        <button type="submit" class="btn btn-success">✅ Saqlash</button>
    </form>
</div>
@endsection
