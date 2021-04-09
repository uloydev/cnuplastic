<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
                    <a class="nav-link" href="{{ route('about.index') }}">About Us</a>
                    <a class="nav-link" href="{{ route('faq.general') }}">Help</a>
                    <a class="nav-link" href="{{ route('products.buy') }}">Menu beli</a>
                </div>
                <div class="navbar-navv">
                    <a class="nav-link" aria-current="page" href="{{ route('merchandise.index') }}">
                        <button>Merchandise</button>
                    </a>
                    <a class="nav-link" href="{{ route('products.index') }}">
                        <button class="">Produk</button>
                    </a>
                    <a class="nav-link" href="{{ route('login') }}">
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

@yield('component-outside')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
