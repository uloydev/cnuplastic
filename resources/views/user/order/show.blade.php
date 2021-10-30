@extends('layouts.user')

@section('header')
    Order Detail
@endsection


@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            @if ($order->status == "paid" and $order->payment)
                <div class="form-group">
                    <label>Proof of payment</label>
                    <div class="img-detail">
                        <img alt="image" src="{{ Storage::url($order->payment)}}">
                    </div>
                </div>
            @endif
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
            <div class="form-group">
                <label>status</label>
                <div>
                    @switch($order->status)
                        @case('unpaid')
                        <div class='badge badge-danger'>Unpaid</div>
                        @break
                        @case('paid')
                        <div class='badge badge-info'>Paid</div>
                        @break
                        @case('finished')
                        <div class='badge badge-danger'>Success</div>
                        @break
                        @default
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
