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
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="border border-dark m-1 py-3 px-2 rounded-3">
                        <img src="image/totebag.png" class="d-block w-100">
                        <h5 class="">Totebag Blacu Custom</h5>
                        <p class="my-3">Others</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                                data-bs-target="#merchandiseDetailModal">Detail</a>
                            <span class="text-orange">Rp 20.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection