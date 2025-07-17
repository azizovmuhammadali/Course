@extends('layouts.manager')

@section('title', "Ustozlar Ro'yxati")

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">👨‍🏫 Ustozlar Ro'yxati</h2>
        <a href="{{ route('manager.teachers.create') }}"
           class="btn btn-success text-white px-4 shadow-sm">
            + Yangi ustoz
        </a>
    </div>

    @if($teachers->count())
        <table class="table table-bordered align-middle text-center shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Ismi</th>
                    <th>Tavsifi</th>
                    <th>Telefon</th>
                    <th>Amallar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $index => $teacher)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $teacher->name }}</td>
                        <td>{{ $teacher->description }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('manager.teachers.show', $teacher->id) }}"
                                   class="btn btn-sm btn-info text-white">Ko‘rish</a>
                                <a href="{{ route('manager.teachers.edit', $teacher->id) }}"
                                   class="btn btn-sm btn-warning text-white">Tahrirlash</a>
                                <form method="POST" action="{{ route('manager.teachers.destroy', $teacher->id) }}"
                                      onsubmit="return confirm('Ushbu ustozni o‘chirishga ishonchingiz komilmi?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">O‘chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info text-center">
            Hozircha ustozlar mavjud emas. <br>
            <a href="{{ route('manager.teachers.create') }}" class="btn btn-success mt-3">
                Yangi ustoz qo‘shish
            </a>
        </div>
    @endif
@endsection
