@extends('layout.admin')

@section('content')
<div class="container mt-5">
    <h2>To‘lovni tahrirlash</h2>

    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Talaba</label>
            <select name="student_id" class="form-select" required>
                <option value="">Tanlang</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}" {{ $payment->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="course_list_id" class="form-label">Kurs</label>
            <select name="course_list_id" class="form-select" required>
                <option value="">Tanlang</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $payment->course_list_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="payment_sum" class="form-label">To'lov miqdori</label>
            <input type="number" name="payment_sum" value="{{ $payment->payment_sum }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lesson_count_paid" class="form-label">O‘tilgan darslar soni</label>
            <input type="number" name="lesson_count_paid" value="{{ $payment->lesson_count_paid }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="month" class="form-label">🗓️ Oy</label>
            <input type="text" name="month" class="form-control" value="{{ $payment->month }}" required>
        </div>
                    <div class="mb-3">
            <label for="date_at" class="form-label">🗓️ To‘lov sanasi</label>
            <input type="date" name="date_at" class="form-control" value="{{ $payment->date_at }}" required>
        </div>
        <div class="d-grid gap-2 mt-3">
            <a href="{{ route('payments.index') }}" class="btn btn-secondary btn-lg w-100">
                ⬅️ Orqaga
            </a>
            <button type="submit" class="btn btn-success btn-lg w-100">
                💾 Saqlash
            </button>
        </div>
    </form>
</div>
@endsection
