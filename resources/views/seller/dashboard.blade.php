@extends('layouts.seller')

@section('header')
    Dashboard
@endsection


@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-calendar"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Date</h4>
                    </div>
                    <div class="card-body">
                        {{ now()->format('d/m/Y') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-android-checkmark-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Account Status</h4>
                    </div>
                    <div class="card-body">
                        @switch($user->verification_status)
                            @case('not_verified')
                            <div class='badge badge-danger'>Not Verified</div>
                            @break
                            @case('verified')
                            <div class='badge badge-success'>Verified</div>
                            @break
                            @case('requested')
                            <div class='badge badge-info'>Requested</div>
                            @break
                            @case('rejected')
                            <div class='badge badge-danger'>Rejected</div>
                            @break
                            @default
                        @endswitch
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
                        {{ $productTotal }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-sm-4">
                <div class="card-icon bg-primary">
                    <i class="ion ion-ios-compose"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Request</h4>
                    </div>
                    <div class="card-body">
                        {{ $promoteTotal }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Information!</h5>
        </div>
        <div class="card-body">
            <center>
                <h6>Promosikan produk dengan mudah melalui instagram kami <a href="https://www.instagram.com/jempol.upnvj">
                        @jempol.upnvj</a></h6>
                <h6>Mulai dari 15.000 per produk</h6><br>
                <a href="{{ route('seller.promotion.create') }}" class="btn btn-oranye btn-block register"
                    style="width: 200px">
                    Promosikan Sekarang !
                </a>
            </center>
        </div>
    </div>
@endsection
