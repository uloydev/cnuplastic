@extends('layouts.admin')
@section('header')
    Detail Request Promotion
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image" src="{{ $promotion->product->image ? Storage::url($promotion->product->image) : 'https://via.placeholder.com/200' }}" style="width: 220px">
                </div>
                <div class="form-group">
                    <label>Seller Name</label>
                    <h6>{{ $promotion->user->name }}</h6>
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <h6>{{ $promotion->user->indetity_id }}</h6>
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <h6>{{ $promotion->product->name }}</h6>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <h6>RP {{ $promotion->product->price }}</h6>
                </div>
                <div class="form-group">
                    <label>Decription</label>
                    <h6>
                        {{ $promotion->product->description }}
                    </h6>
                </div>
                <hr>
                <div class="form-group">
                    <label>Category</label>
                    <h6>{{ $promotion->product->productCategory->name }}</h6>
                </div>
                <div class="form-group">
                    <label>WhatsApp Number</label>
                    <h6>{{ $promotion->user->whatsapp }}</h6>
                </div>
                <br>
                <a href="https://api.whatsapp.com/send?phone={{ $promotion->user->whatsapp }}" class="btn btn-oranye" tabindex="1">
                    <b>CONTACT SELLER</b>
                </a>
            </div>
        </div>
    </div>
@endsection
