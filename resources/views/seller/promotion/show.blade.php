@extends('layouts.seller')

@section('header')
    Detail Request Promotion
@endsection


@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">

                <div class="form-group">
                    <label>Product Images</label>
                    <div class="img-detail">
                        <img alt="image"
                            src="{{ $promotion->product->image ? Storage::url($promotion->product->image) : 'http://via.placeholder.com/200' }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <p>{{ $promotion->product->name }}</p>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <p>Rp. {{ $promotion->product->price }}</p>

                </div>
                <div class="form-group">
                    <label>Category</label>
                    <p>{{ $promotion->product->productCategory->name }}</p>

                </div>
                <div class="form-group">
                    <label>Description</label>
                    <p class="mr-5">{{ $promotion->product->description }}</p>
                </div>
                <div class="form-group">
                    <label>status</label>
                    <div>
                        @switch($promotion->status)
                            @case('requested')
                            <div class='badge badge-info'>Requested</div>
                            @break
                            @case('accepted')
                            <div class='badge badge-success'>Accepted</div>
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
    </div>
@endsection
