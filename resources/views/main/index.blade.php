@extends('layouts.customer')

@section('content')

<!--awal carousel-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('image/slide2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Find any product?</h1>
                <button>SHOP NOW</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/slide1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Find any product?</h1>
                <button>SHOP NOW</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/slide3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Find any product?</h1>
                <button>SHOP NOW</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--akhir carousel-->
<h3 class="judul">New Product</h3>
<!-- produk cuuuy-->
<div class="produk">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                        <p class="card-text">Elektronik</p>
                        <a href="#" class="buttonn">Detail</a>
                        <a href="#" class="buton">Rp. 30.000</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="cardcustom">
                    <div class="card">
                        <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                            <p class="card-text">Elektronik</p>
                            <a href="#" class="buttonn">Detail</a>
                            <a href="#" class="buton">Rp. 30.000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                        <p class="card-text">Elektronik</p>
                        <a href="#" class="buttonn">Detail</a>
                        <a href="#" class="buton">Rp. 30.000</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('image/laptop.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Dell Inspiron 3567 | i7-7500 | DOS</h5>
                        <p class="card-text">Elektronik</p>
                        <a href="#" class="buttonn" data-bs-toggle="modal" data-bs-target="#produk1">Detail</a>
                        <a href="#" class="buton">Rp. 30.000</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/laptop.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                            <img src="{{ asset('image/laptop.jpg') }}" class="detailgambar">
                            <img src="{{ asset('image/laptop.jpg') }}" class="detailgambar">
                            <img src="{{ asset('image/laptop.jpg') }}" class="detailgambar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detailmodal">
                            <h4>Kemeja pria lengan panjang</h4>
                            <h6 class="cloth">Clothes</h6>
                            <h4>Rp 30.000</h4>
                            <hr size="4px">
                            <h6>Product Description</h6>
                            <hr size="4px">
                            <h6 class="h6">Kemeja pria super nyaman cocok untuk pakaian kantor.<br>
                                Pilihan warna :<br>
                                Putih<br>
                                Hitam<br>
                                Abu-Abu<br>
                            </h6>
                            <hr size="4px">
                            <a href="">
                                <img src="{{ asset('image/toko.png') }}" class="profil" />
                            </a>
                            <a href="">
                                <p class="toko">Boy Style<br>
                                <span>Ghani Fadillah</span></p>
                            </a>
                            <a href="">
                                <img src="{{ asset('image/wa.png') }}" class="wa" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Kembali
                </button>
                <button type="button" class="btn btn-primary">Beli</button>
            </div>
        </div>
    </div>
</div>
</div>
<!--akhir produk-->
<div class="loadd">
    <button class="load">LOAD MORE</button>
</div>

<!--awal content-->
<div class="sell">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4><b>Have a product to sell? Sell you product here!</b></h4>
                <h5>Easy, Secure, and Free!</h5>
                <div class="signlearn">
                    <button class="btn btn-danger">SIGN UP NOW</button>&nbsp;
                    <button class="learn">Learn More</button>
                </div>
            </div>
            <div class="col-sm-4">
                <img id="a" src="{{ asset('image/produk.svg') }}">
            </div>
        </div>
    </div>
</div>
<!--akhir content-->
<!--awal kontak-->
<div class="kontak" id="section-kontak">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img id="b" src="{{ asset('image/email.svg') }}">
            </div>
            <div class="col-sm-6">
                <h4>Contact Us</h4>
                <p>Your Name</p>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nama</label>
                </div>

                <p>Your Email</p>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <p>Your Message</p>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <input type="submit" name="SEND" value="SEND" class="submit">
            </div>
        </div>
    </div>
</div>
<!--akhir kontak-->

@endsection