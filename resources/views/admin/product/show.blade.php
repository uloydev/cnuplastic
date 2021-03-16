@extends('layouts.admin')
@section('header')
    Detail Product
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image" src="{{ $product->image }}">
                </div>
                <div class="form-group">
                    <label>Product Code</label>
                    <h6>{{ $product->id }}</h6>
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <h6>{{$product->name}}</h6>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <h6>RP. {{$product->price}}</h6>
                </div>
                <div class="form-group">
                    <label>Decription</label>
                    <h6>
                        {{$product->description}}
                    </h6>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <h6>{{$product->productCategory->name}}</h6>
                </div>
                <div class="form-group">
                    <label>Store Name</label>
                    <h6>{{$product->user->store}}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
