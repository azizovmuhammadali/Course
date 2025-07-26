@extends('layout.admin')
@section('content')
<div class="container">
    <h2>Kurs O'quvchisi haqida ma'lumot</h2>
    <div class="card mt-4">
        <div class="card-body">
            <p><strong>Kurs nomi:</strong> {{ $coursestudent->course->name }}</p>
            <p><strong>Talaba:</strong> {{ $coursestudent->student->name }}</p>
             <p><strong>Ustoz:</strong> {{ $coursestudent->teacher->name }}</p>
       <p><strong>Uy vazifa holati:</strong> {{ $coursestudent->homework_status}}</p>
            <p><strong>Oy:</strong> {{ $coursestudent->month }}</p>
             <p><strong> Ma'lumot sanasi:</strong> {{ $coursestudent->date_at }}</p>
              <p><strong>To'lov holati:</strong> {{ $coursestudent->payment_status }}</p>
        </div>
    </div>
    <a href="{{ route('coursestudents.index') }}" class="btn btn-secondary mt-3">Orqaga</a>
</div>
@endsection
