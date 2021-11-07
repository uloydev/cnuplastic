@extends('layouts.user')

@section('header')
    Order payment
@endsection


@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <h2 class="mb-3">Pay your Order now !</h2>
            <h5 class="font-weight-bold">
                Bayar ke bank {{ $paymentSetting->bank }} norek 
                {{ $paymentSetting->number }} a/n 
                {{ $paymentSetting->holder_name }}
            </h5>
            <div class="form-group">
                <label>Product Name</label>
                <p>{{ $order->product_name }}</p>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <p>Rp. {{ $order->product_price }}</p>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <p>{{ $order->quantity }}</p>
            </div>
            <div class="form-group">
                <label>Price Total</label>
                <p class="mr-5">Rp. {{ $order->price_total }}</p>
            </div>
            <form action="{{ route('user.order.pay', $order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="payment" tabindex="1" required accept="image/*">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info" tabindex="1">
                        <b>Submit</b>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
