@extends('layouts.customer')

@section('content')

    <div class="row g-0 mt-2">
        <!-- sidebar -->
        <div class="col-md-4 col-lg-3 bg-light">
            <div class="px-4 pt-3 fw-bold">
                <img src="image/dot.png" class="me-3" width="30px" alt="">
                <span class="align-middle">Merch Category</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('merchandise.index') }}"
                        class="nav-link link-dark {{ !request()->has('cat') ? 'active' : '' }}">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a href="{{ route('merchandise.index', ['cat' => $category->id]) }}"
                            class="nav-link link-dark {{ request()->cat == $category->id ? 'active' : '' }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- products -->
        <div class="col-md-8 col-lg-9">
            <div class="mx-5">
                <form action="" method="get">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Search product" aria-describedby="searchBtn"
                            name="search" value="{{ request()->search }}">
                        <button class="btn btn-outline-orange" type="submit" id="searchBtn">search</button>
                    </div>
                </form>
                <div class="row my-5 gy-3 gx-1 justify-content-center">
                    @forelse ($products as $product)
                        <div class="col-lg-3 col-md-6">
                            @include('product.item', [
                            'name' => $product->name,
                            'category' => $product->merchandiseCategory->name,
                            'price' => $product->price,
                            'id' => $product->id,
                            'image' => $product->image
                            ])
                        </div>
                    @empty
                        <div class="col">
                            <p class="text-center">Tidak ada produk</p>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5">
                {{ $products->links() }}
            </div>
        </div>
    </div>

    @foreach ($products as $product)
        @include('partials.merchandise-detail-modal', ['product' => $product])
    @endforeach

@endsection
