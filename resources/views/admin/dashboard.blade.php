@extends('layouts.admin')

@section('header')
Dashboard
@endsection


@section('content')
    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-person"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total User</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalUser }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Product</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalProduct }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-plus-round"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Paid Order</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalPaid }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-ios-checkmark"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Finish Order</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalFinished }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Recent Transaction</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
                @forelse ($recentOrder as $order)
                    <li class="media">
                        <div class="media-body">
                            <div class="float-right">
                                <small>
                                    {{ $order->created_at->diffForHumans() }}
                                </small>
                            </div>
                            <div>
                                <span class="media-title">{{ $order->user->name }}</span>
                                telah membeli <b>{{ $order->product_name }}</b>
                                dengan status order <b>{{ $order->status }}</b>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="text-black-50">
                        There's no transaction right now
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
