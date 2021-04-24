@extends('layouts.customer')

@section('content')

<div class="row g-0 mt-2">
    <!-- sidebar -->
    <div class="col-md-4 col-lg-3 bg-light">
        <div class="px-4 pt-3 fw-bold">
            <img src="image/dot.png" class="me-3" width="30px" alt="">
            <span class="align-middle">Product Category</span>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link link-dark active">All</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-dark">Clothes</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-dark">Foods</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-dark">Others</a>
            </li>
        </ul>
    </div>
    <!-- products -->
    <div class="col-md-8 col-lg-9">
        <div class="mx-5">
            <form action="" method="get">
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" placeholder="Search product"
                        aria-describedby="searchBtn">
                    <button class="btn btn-outline-orange" type="submit" id="searchBtn">search</button>
                </div>
            </form>
            <div class="row my-5 g-1">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6">
                    @include('product.item', [
                        'name' => Str::words($product->name, 3),
                        'category' => $product->productCategory->name,
                        'price' => $product->price,
                        'id' => Str::slug($product->name)
                    ])
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach ($products as $product)
<div class="modal fade" id="productDetailModal{{ Str::slug($product->name) }}" 
    tabindex="-1" 
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="merchandiseDetailModalLabel">Product Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-4">
                        <img src="{{ asset('image/totebag.png') }}" 
                        class="d-block w-100 rounded-3 border border-dark">
                    </div>
                    <div class="col-8">
                        <div class="fw-bold mb-1">{{ $product->name }}</div>
                        <div class="text-muted mb-1">Others</div>
                        <h4>Rp {{ number_format($product->price) }}</h4>
                        <div class="border border-1 border-start-0 border-end-0 border-dark my-2 py-1">
                            Product
                            Description
                        </div>
                        <div class="border border-1 border-start-0 border-end-0 border-top-0 border-dark pb-2 mb-4">
                            Kemeja pria super nyaman cocok untuk pakaian kantor.
                            Pilihan Warna :
                            Putih
                            Hitam
                            Abu-abu
                        </div>
                        <a href="#" class="btn btn-success btn-sm fw-bold rounded-3">
                            <box-icon name='whatsapp' type='logo' color='#ffffff' class="align-middle">
                            </box-icon> <span class="align-middle">CHAT NOW</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection