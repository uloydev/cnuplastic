@extends('layouts.user')

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
                        {{ now()->format('d-m-Y') }}
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
                        <h4>Unpaid Order</h4>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-danger">{{ $unpaidOrder }}</div>
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
                        <h4>Paid Order</h4>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-info">{{ $paidOrder }}</div>
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
                        <h4>Order Success</h4>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success">{{ $successOrder }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
