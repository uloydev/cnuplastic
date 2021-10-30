@extends('layouts.admin')
@section('header')
    Detail Seller
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <h6>{{ $seller->name }}</h6>
                </div>
                <div class="form-group">
                    <label>WhatsApp Number</label>
                    <h6>{{ $seller->whatsapp }}</h6>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <h6>{{ $seller->email }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
