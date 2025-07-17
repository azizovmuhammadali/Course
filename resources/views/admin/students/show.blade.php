@extends('layout.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Student haqida ma'lumot</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">👤 Ismi: <span class="text-primary">{{ $student->name }}</span></h5>
                        <p class="card-text"><strong>📞 Telefon:</strong> {{ $student->phone }}</p>
                        <p class="card-text"><strong>📝 Tavsif:</strong> {{ $student->description }}</p>
                        <p class="card-text">
                            <strong>📌 Status:</strong> 
                            @if($student->status)
                                <span class="badge bg-success">Aktiv</span>
                            @else
                                <span class="badge bg-secondary">Noaktiv</span>
                            @endif
                        </p>

                        <a href="{{ route('students') }}" class="btn btn-outline-primary mt-3">⬅️ Ortga</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
