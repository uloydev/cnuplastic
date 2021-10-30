@extends('layouts.admin')

@section('header', 'Change payment setting')

@section('content')
<div class="card">
    <form class="card-body" method="POST" action="{{ route('admin.payment.update') }}">
        @csrf @method('PUT')
        <div class="mb-4">
            <p class="font-weight-bold">Nomor Rekening</p>
            <input value="{{ $paymentSetting->number }}" name="number" 
            class="form-control" required>
        </div>
        <div class="mb-4">
            <p class="font-weight-bold">Nama Penerima</p>
            <input value="{{ $paymentSetting->holder_name }}" name="holder_name" 
            class="form-control" required>
        </div>
        <div class="mb-4">
            <p class="font-weight-bold">Bank</p>
            <input value="{{ $paymentSetting->bank }}" name="bank" 
            class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save change</button>
    </form>
</div>
@endsection