@extends('layouts.admin')
@section('header')
    <a href="{{ url()->previous() }}" class="mr-2">
        <i class="ion ion-android-arrow-back"></i>
    </a>
    <span>Detail Product</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image"
                    src="{{ $product->image ? Storage::url($product->image) : 
                    'http://via.placeholder.com/200' }}">
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <h6>{{ $product->name }}</h6>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <h6>RP. {{ $product->price }}</h6>
                </div>
                <div class="form-group">
                    <label>Decription</label>
                    <h6>
                        {{ $product->description }}
                    </h6>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <h6>{{ $product->productCategory->name }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
