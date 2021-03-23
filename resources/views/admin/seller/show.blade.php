@extends('layouts.admin')
@section('header')
    Detail Seller
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image" src="{{ $seller->avatar ? Storage::url($seller->avatar) : 'https://via.placeholder.com/200' }}" style="width: 220px">
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <h6>{{ $seller->indetity_id }}</h6>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <h6>{{ $seller->name }}</h6>
                </div>
                <div class="form-group">
                    <label>Profession</label>
                    <h6>{{ $seller->profession }}</h6>
                </div>
                <div class="form-group">
                    <label>Faculty</label>
                    <h6>{{ $seller->faculty }}</h6>
                </div>
                <hr>
                <div class="form-group">
                    <label>Store Name</label>
                    <h6>{{ $seller->store }}</h6>
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
