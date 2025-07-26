@extends('layout.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 500px;">
        <h3 class="text-center mb-4 text-primary">💳 Kurs O‘quvchisini Yangilash</h3>

        <form action="{{ route('coursestudents.update', $coursestudent->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Talaba --}}
            <div class="mb-3">
                <label for="student_id" class="form-label">👤 Talaba</label>
                <select name="student_id" class="form-select @error('student_id') is-invalid @enderror">
                    <option value="">-- Tanlang --</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $coursestudent->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
                @error('student_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Kurs --}}
            <div class="mb-3">
                <label for="course_list_id" class="form-label">📘 Kurs</label>
                <select name="course_list_id" class="form-select @error('course_list_id') is-invalid @enderror" required>
                    <option value="">-- Tanlang --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $coursestudent->course_list_id == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
                @error('course_list_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Ustoz --}}
            <div class="mb-3">
                <label for="teacher_id" class="form-label">👤 Ustoz</label>
                <select name="teacher_id" class="form-select @error('teacher_id') is-invalid @enderror" required>
                    <option value="">-- Tanlang --</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ $coursestudent->teacher_id == $teacher->id ? 'selected' : '' }}>
                            {{ $teacher->name }}
                        </option>
                    @endforeach
                </select>
                @error('teacher_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Uyga vazifa --}}
            <div class="mb-3">
                <label for="homework_status" class="form-label">📌 Uyga vazifa holati</label>
                <select name="homework_status" class="form-select @error('homework_status') is-invalid @enderror">
                    <option value="">-- Tanlang --</option>
                    <option value="bajarilgan" {{ $coursestudent->homework_status == 'bajarilgan' ? 'selected' : '' }}>Bajarilgan</option>
                    <option value="bajarilmagan" {{ $coursestudent->homework_status == 'bajarilmagan' ? 'selected' : '' }}>Bajarilmagan</option>
                </select>
                @error('homework_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Oy --}}
          <div class="mb-3">
    <label for="month" class="form-label">🗓️ Oy</label>
    <input type="text" name="month" class="form-control @error('month') is-invalid @enderror" 
           value="{{ old('month', $coursestudent->month ) }}">
    @error('month')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="date_at" class="form-label">🗓️ To‘lov sanasi</label>
    <input type="date" name="date_at" class="form-control @error('date_at') is-invalid @enderror"
           value="{{ old('date_at', $coursestudent->date_at ) }}">
    @error('date_at')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


            {{-- To‘lov holati --}}
            <div class="mb-3">
                <label for="payment_status" class="form-label">📌 To‘lov holati</label>
                <select name="payment_status" class="form-select @error('payment_status') is-invalid @enderror">
                    <option value="">-- Tanlang --</option>
                    <option value="Tolangan" {{ $coursestudent->payment_status == 'Tolangan' ? 'selected' : '' }}>Tolangan</option>
                    <option value="Tolanmagan" {{ $coursestudent->payment_status == 'Tolanmagan' ? 'selected' : '' }}>Tolanmagan</option>
                </select>
                @error('payment_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tugmalar --}}
            <div class="d-grid gap-2 mt-3">
                <a href="{{ route('coursestudents.index') }}" class="btn btn-secondary btn-lg w-100">⬅️ Orqaga</a>
                <button type="submit" class="btn btn-success btn-lg w-100">💾 Saqlash</button>
            </div>
        </form>
    </div>
</div>
@endsection
