@extends('layout.admin')

@section('content')
<div class="container">
    <h2>Yangi o‘quvchi qo‘shish</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label>Ism</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Izoh</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group mb-3">
            <label>Telefon</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1">Faol (true)</option>
                <option value="0" selected>Faol emas (false)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Saqlash</button>
        <a href="{{ route('students') }}" class="btn btn-secondary">Ortga</a>
    </form>
</div>
@endsection
