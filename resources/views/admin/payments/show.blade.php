@extends('layout.admin')
@section('content')
<div class="container">
    <h2>To'lov tafsilotlari</h2>
    <div class="card mt-4">
        <div class="card-body">
            <p><strong>Kurs nomi:</strong> {{ $payment->course->name }}</p>
            <p><strong>Talaba:</strong> {{ $payment->student->name }}</p>
            <p><strong>To'lov summasi:</strong> {{ $payment->payment_sum }} so'm</p>
            <p><strong>To'langan darslar soni:</strong> {{ $payment->lesson_count_paid }}</p>
            <p><strong>Oy:</strong> {{ $payment->month }}</p>
        </div>
    </div>
    <a href="{{ route('payments.index') }}" class="btn btn-secondary mt-3">Orqaga</a>
</div>
@endsection
