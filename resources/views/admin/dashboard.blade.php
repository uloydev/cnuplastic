@extends('layouts.admin')

@section('header')
Dashboard
@endsection


@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-person"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total User</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalSeller }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
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
                        <h4>Total Request</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalRequest }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Recent Activities</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
                @foreach ($recentProducts as $product)
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="{{ $product->user->avatar ? Storage::url($product->user->avatar) : 'http://via.placeholder.com/200' }}" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">
                                <small>{{ $product->created_at->diffForHumans() }}</small>
                            </div>
                            <div class="media-title">{{ $product->user->name }}</div>
                            <small><b>{{ $product->user->store }}</b> telah menambahkan produk <b>{{ $product->name }}</b></small>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="text-center">
                <a href="{{ route('admin.product.index') }}" class="btn btn-oranye btn-round">
                    View All
                </a>
            </div>
        </div>
    </div>
@endsection
