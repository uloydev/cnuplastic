@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-primary">
        <div class="card-header">
            <img src="{{ Storage::url($order->payment) }}" alt="" height="300px">
        </div>
        <div class="card-body">
            <div class="mb-3">
                <p>Product name</p>
                <p>{{ $order->product_name }}</p>
            </div>
            <div class="mb-3">
                <p>Order at</p>
                <p>{{ $order->created_at }}</p>
            </div>
            <div class="mb-3">
                <p>Product price</p>
                <p>{{ $order->product_price }}</p>
            </div>
            <div class="mb-3">
                <p>Product quantity</p>
                <p>{{ $order->quantity . 'pcs' }}</p>
            </div>
            <div class="mb-3">
                <p>Price total</p>
                <p>{{ $order->price_total }}</p>
            </div>
            <form action="{{ route('admin.order.verif', $order->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" class="btn btn-primary" name="status" value="finished">
                    Verif pembayaran
                </button>
                <button type="submit" class="btn btn-danger" name="status" value="unpaid">
                    Decline pembayaran
                </button>
            </form>
        </div>
    </div>
</div>

@endsection