@extends('layouts.admin')

@section('header', $status . ' Order')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Buyer Name</th>
                            <th>Order at</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Price Total</th>
                            @if ($status == 'finished')
                            <th>Rating</th>
                            @endif
                            @if ($status == 'paid')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>
                                <a href="{{ route('admin.user.index') }}">
                                    {{ $order->user->name }}
                                </a>
                            </td>
                            <td>{{ $order->created_at->format('d F Y H:i') }}</td>
                            <td>{{ $order->product_name }}</td>
                            <td>Rp. {{ number_format($order->product_price) }}</td>
                            <td>{{ $order->quantity . ' pcs' }}</td>
                            <td>Rp. {{ number_format($order->price_total) }}</td>

                            @if ($status == 'finished')
                            <td>
                                @if ($order->productRating)
                                {{ $order->productRating->score }} / 10
                                @else
                                <span class="text-danger">0 / 10 (belum di rating)</span>
                                @endif
                            </td>
                            @endif

                            @if ($status == 'paid')
                            <td>
                                <a href="{{ route('admin.order.verif', $order->id) }}">
                                    Accept payment
                                </a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection