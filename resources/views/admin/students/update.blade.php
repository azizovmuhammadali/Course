@extends('layout.admin')

@section('content')
<div class="container">
    <h2>O‘quvchini tahrirlash</h2>

    <form action="{{ route('students.edit', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Ism</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label>Izoh</label>
            <textarea name="description" class="form-control" rows="3">{{ $student->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Telefon</label>
            <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
        </div>

        <div class="form-group mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" @if($student->status) selected @endif>Faol (true)</option>
                <option value="0" @if(!$student->status) selected @endif>Faol emas (false)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Yangilash</button>
    </form>
</div>
@endsection
