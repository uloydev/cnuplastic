@extends('layouts.customer')

@section('content')
<div class="konten-produk">
	<a href="" class="gambar-icon">
        <img src="{{ asset('image/toko.png') }}" class="profil">
    </a>
    <a href="">
        <p class="toko">
            Boy Style<br>
            <span>Ghani Fadillah</span>
        </p>
    </a>
</div>
<div class="konten-produk1">
	<p>Toko kami menjual berbagai macam pakaian pria yang nyaman, murah, berkualitas, amanah.</p>
	<p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim fermentum euismod...</p>
	<button>
        <h6 style="font-family: Roboto; color: #FC3515; font-weight: 700; ">
            View More
        </h6>
    </button>
	<p>
        <img src="{{ asset('image/wa.png') }}" width="150px">
    </p>
	<hr size="4px">
</div>
<div class="kategori-produk">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="kategori">

                    <div class="ul">
                        <h6>
                            <img src="{{ asset('image/dot.png') }}"
                            width="30px"/>
                            Product Category
                        </h6>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> All</li>
                            <li><i class="fas fa-angle-right"></i> Merchandise</li>
                            <li><i class="fas fa-angle-right"></i> Cloth</li>
                            <li><i class="fas fa-angle-right"></i> Bag</li>
                            <li><i class="fas fa-angle-right"></i> Food</li>
                            <li><i class="fas fa-angle-right"></i> Shoes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="cari">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="judul">
                    <p>All Product</p>
                </div>
                <div>
                    <p class="judul1">8 items</p>
                </div>
                <div class="produk">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width: 13rem;">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                                        <p class="card-text">Elektronik</p>
                                        <a href="#" class="buttonn" data-bs-toggle="modal"
                                            data-bs-target="#produk1">Detail</a>
                                        <a href="#" class="buton">Rp. 30.000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loadd">
                        <button class="load">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection