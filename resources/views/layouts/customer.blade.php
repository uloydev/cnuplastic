<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="image/jempol.png" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ Route::currentRouteName() == route('about.index') ? 'active' : ''}}" href="{{ route('about.index') }}">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ Route::currentRouteName() == route('faq.index') ? 'active' : ''}}" href="{{ route('faq.index') }}">
                            Help
                        </a>
                    </li>
                </ul>
                <div class="d-grid gap-2 d-md-block">
                    <a href="{{ route('merchandise.index') }}" class="btn btn-outline-orange rounded-3">Merchandise</a>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-orange rounded-3">Product</a>
                    <a href="{{ route('login') }}" class="btn btn-orange rounded-3">
                        Login As Seller
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="row g-0 gs-5 bg-navy text-white">
            <div class="col-lg-3 p-5 pe-0">
                <p class="fw-bold mb-4">Address</p>
                <p>Jl. RS. Fatmawati Raya, Pd. Labu, Kec. Cilandak, Kota Depok, Jawa Barat 12450</p>
            </div>
            <div class="col-lg-3 p-5 pe-0">
                <p class="fw-bold mb-4">Contact</p>
                <p class="mb-2">
                    <box-icon name='instagram' type='logo' color='#ffffff' class="align-middle"></box-icon>
                    @jempol.upnvj
                </p>
                <p class="mb-2">
                    <box-icon name='phone-call' color='#ffffff' class="align-middle"></box-icon> 085817922089
                </p>
                <p class="mb-2">
                    <box-icon name='mail-send' color='#ffffff' class="align-middle"></box-icon> jempolupnvj@gmail.com
                </p>
            </div>
            <div class="col-lg-3 p-5 pe-0">
                <p class="fw-bold mb-4">Frequently Ask Questions</p>
                <p class="mb-2">Bagaimana cara berjualan di Jempol?</p>
                <p class="mb-2">Bagaimana cara membeli di Jempol?</p>
            </div>
            <div class="col-lg-3 d-flex align-items-center ps-sm-5">
                <div class="credit-box px-4 d-flex align-items-center">
                    <img src="image/logo/kesekretariatan.png" class="w-25 mx-auto">
                    <box-icon name='x'></box-icon>
                    <img src="image/logo/kominfo.png" class="w-25 mx-auto">
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center py-3 bg-navy-darker justify-content-center text-white text-center">
            <span>Copyright 2021 Design All Right Reserved. Powered by Developer BEM UPNVJ</span>
        </div>
    </footer>
</body>

@yield('component-outside')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>

@stack('scripts')

</html>
