@extends('layouts.admin')
@section('header')
    Detail Product
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image"
                        src="{{ $product->image ? Storage::url($product->image) : 'http://via.placeholder.com/200' }}">
                </div>
                <div class="form-group">
                    <label>Product Code</label>
                    <h6>{{ $product->id }}</h6>
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
                <div class="form-group">
                    <label>Store Name</label>
                    <h6>{{ $product->user->store }}</h6>
                </div>
                @if ($product->link_shopee)
                    <div class="form-group">
                        <label class="d-block">Link Shopee</label>
                        <a href="{{ $product->link_shopee }}" class="btn btn-oranye badge" target="_blank">
                            go to shopee
                        </a>
                    </div>
                @endif
                @if ($product->link_tokopedia)
                    <div class="form-group">
                        <label class="d-block">Link Tokopedia</label>
                        <a href="{{ $product->link_tokopedia }}" class="btn btn-success badge" target="_blank">
                            go to tokopedia
                        </a>
                    </div>
                @endif
                @if ($product->link_bukalapak)
                    <div class="form-group">
                        <label class="d-block">Link Bukalapak</label>
                        <a href="{{ $product->link_bukalapak }}" class="btn btn-danger badge" target="_blank">
                            go to bukalapak
                        </a>
                    </div>
                @endif
                @if ($product->link_lazada)
                    <div class="form-group">
                        <label class="d-block">Link Lazada</label>
                        <a href="{{ $product->link_lazada }}" class="btn btn-primary badge" target="_blank">
                            go to lazada
                        </a>
                    </div>
                @endif
                @if ($product->link_instagram)
                    <div class="form-group">
                        <label class="d-block">Link Instagram</label>
                        <a href="{{ $product->link_instagram }}" class="btn btn-info badge" target="_blank">
                            go to instagram
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
