@extends('layout.admin')

@section('content')
    <div class="container mt-5">
        <h2>Studentlar ro'yxati</h2>

        @if($students->isEmpty())
            <div class="alert alert-info mt-3">
                Hozircha hech qanday student mavjud emas.
            </div>
            <a href="{{ route('students.create') }}" class="btn btn-primary mt-2">Yangi student qo'shish</a>
        @else
            <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Yangi student qo'shish</a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Ism</th>
                        <th>Izoh</th>
                        <th>Telefon</th>
                        <th>Holat</th>
                        <th>Amallar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->description }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                @if($student->status)
                                    <span class="badge bg-success">Aktiv</span>
                                @else
                                    <span class="badge bg-secondary">Nofaol</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Ko'rish</a>
                                <a href="{{ route('students.update', $student->id) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                                <form action="{{ route('students.delete', $student->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('O‘chirishga ishonchingiz komilmi?')" class="btn btn-danger btn-sm">O‘chirish</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
