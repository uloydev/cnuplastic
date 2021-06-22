<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <address class="d-block">
                    Jl. RS. Fatmawati Raya, Pd. Labu, Kec. Cilandak, Kota Depok, Jawa Barat 12450
                </address>
            </div>
            <div class="col-lg-3 p-5 pe-0">
                <p class="fw-bold mb-4">Contact</p>
                <ul>
                    @foreach ($contacts as $contact)
                    <li class="@if(!$loop->last) mb-3 @endif">
                        <img src="{{ asset('img/icon/' . $contact->icon) }}" alt="">
                        <span>{{ $contact->username }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 p-5 pe-0">
                <p class="fw-bold mb-4">Frequently Ask Questions</p>
                <ol class="ps-3">
                    @foreach ($pinnedFaq as $faq)
                    <li class="@if(!$loop->last) mb-3 @endif">
                        {{ $faq->title }}
                    </li>
                    @endforeach
                </ol>
            </div>
            <div class="col-lg-3 d-flex align-items-center ps-sm-5">
                <div class="bg-white rounded h-50 px-4 d-flex align-items-center">
                    <img src="image/logo/kesekretariatan.png" class="w-25 mx-auto">
                    <box-icon name='x'></box-icon>
                    <img src="image/logo/kominfo.png" class="w-25 mx-auto">
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center py-3 bg-navy-darker justify-content-center text-white text-center">
            <span>Copyright {{ date('Y') }} Design All Right Reserved. Powered by Developer BEM UPNVJ</span>
        </div>
    </footer>
</body>

@yield('component-outside')

<script src="{{ asset('js/style.js') }}"></script>
@stack('scripts')

</html>
