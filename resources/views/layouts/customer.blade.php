<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Viga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' 
    rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Concert One' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="up">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/jempol.png') }}"
                width="130px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">
                        Home
                    </a>
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    <a class="nav-link" href="#">Help</a>
                </div>
                <div class="navbar-navv">
                    <a class="nav-link active" aria-current="page" href="#">
                        <button>Merchandise</button>
                    </a>
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <button class="">Produk</button>
                    </a>
                    <a class="nav-link" href="#">
                        <button class="seller">LOGIN AS SELLER</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="footerjempol">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>Address</h5>
                        <p>Jl. RS. Fatmawati Raya, Pd. Labu, Kec. Cilandak, Kota Depok, Jawa Barat 12450</p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Contact Us</h5>
                        <i class="fab fa-instagram"></i> : @jempol.upnvj<br>
                        <i class="fas fa-phone-alt"></i> : 085608489389<br>
                        <i class="far fa-envelope"></i> : <u>jempolupnvj@gmail.com</u>
                    </div>
                    <div class="col-sm-3">
                        <div class="ask">
                            <h5>Frequently Ask Question</h5>
                            <a href="">Bagaimana cara berjualan di jempol?</a><br>
                            <a href="">Bagaimana cara membeli di jempol?</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="gambar">
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('image/bidang1.png') }}" width="100px">
                            <img src="{{ asset('image/x.png') }}" width="30px">
                            <img src="{{ asset('image/bidang2.png') }}" width="100px">
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerakhir">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            Copyright 2021 Design All Right Reserved. 
                            Powered by Developer BEM UPNVJ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
