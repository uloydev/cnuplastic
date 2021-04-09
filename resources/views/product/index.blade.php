@extends('layouts.customer')

@section('content')

<div class="kategori-produk">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="kategori">
                    <div class="ul">
                        <h6>
                            <img src="{{ asset('image/dot.png') }}"
                            width="30px"/>
                            Product Category
                        </h6>
                        <ul>
                            <li>
                                <a href="{{ route('products.index', ['category' => 'test']) }}">
                                    <i class="fas fa-angle-right"></i> All
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index', ['category' => 'test'] ) }}">
                                    <i class="fas fa-angle-right"></i> Merchandise
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index', ['category' => 'test'] ) }}">
                                    <i class="fas fa-angle-right"></i> Cloth
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index', ['category' => 'test'] ) }}">
                                    <i class="fas fa-angle-right"></i> Bag
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index', ['category' => 'test'] ) }}">
                                    <i class="fas fa-angle-right"></i> Food
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index', ['category' => 'test'] ) }}">
                                    <i class="fas fa-angle-right"></i> Shoes
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="cari">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="judul">
                    <p>All Product</p>
                </div>
                <div class="pr-2">
                    <p class="judul1 mr-0">{{ $totalProduct . ' products' }}</p>
                </div>
                <div class="produk">
                    <div class="container">
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="col-lg-3 mb-3">
                                <div class="card" style="height: 100%">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">
                                            {{ $product->productCategory->name }}
                                        </p>
                                    </div>
                                    <div class="card-footer bg-white d-flex justify-content-between border-top-0">
                                        <button type="button" 
                                        class="btn btn-primary" 
                                        data-toggle="modal" 
                                        data-target="#detail-modal-{{ $product->id }}">
                                            Detail
                                        </button>
                                        <span class="text-danger">
                                            Rp. {{ number_format($product->price) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('component-outside')
    @foreach ($products as $product)
        @include('partials.popup-product', [
            'modalId' => $product->id,
            'productTitle' => ucwords($product->name),
            'productDesc' => $product->description,
            'productImg' => $product->image ? Storage::url($product->image) : 
                            'http://via.placeholder.com/200'
        ])
    @endforeach
@endsection