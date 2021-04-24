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
                    @include('product.item')
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection