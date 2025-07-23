@extends('layout.admin')

@section('content')
<div class="container mt-5">
    <h2>To‘lovlar ro‘yxati</h2>

    <a href="{{ route('payments.create') }}" class="btn btn-success mb-3">Yangi to‘lov qo‘shish</a>

    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Student</th>
                <th>Kurs</th>
                <th>Summa</th>
                <th>Darslar</th>
                <th>Oy</th>
                <th>To'lov sanasi</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $key => $payment)
                <tr class="text-center">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $payment->student->name}}</td>
                    <td>{{ $payment->course->name }}</td>
                    <td>{{ number_format($payment->payment_sum, 0, ',', ' ') }} so'm</td>
                    <td>{{ $payment->lesson_count_paid }}</td>
                    <td>{{ $payment->month }}</td>
                    <td>{{ $payment->date_at }}</td>
                    <td class="d-flex justify-content-center gap-1">
                        <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-info btn-sm">Ko‘rish</a>
                        <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                        <form action="{{ route('payments.delete', $payment->id) }}" method="POST" onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">O‘chirish</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
