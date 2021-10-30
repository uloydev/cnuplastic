@extends('layouts.customer')

@section('title',  'A Place To Sell Your Product Around UPN')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousels as $carousel)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $carousel->path_img }}" class="img-fluid w-100" 
                    draggable="false">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="text-white fw-bold m-0">Find Any Product?</h1>
                            <a href="{{ route('products.index') }}" class="btn btn-lg btn-orange mt-4 rounded-3">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- main content -->
    <div class="container my-5">
        <!-- new propduct -->
        <h3 class="text-center">New Product</h3>
        <div class="row my-5 gy-4 gx-3 mx-3 justify-content-center">
            @forelse ($latestProduct as $product)
                <div class="col-lg-3 col-md-6">
                    @include('product.item', [
                        'name' => $product->name,
                        'category' => $product->productCategory->name,
                        'price' => $product->price,
                        'id' => $product->id,
                        'image' => $product->image,
                        'type' => 'new'
                    ])
                </div>
            @empty
                <x-alert :is-dismissable="false" type="secondary" class="mb-0">
                    <p class="text-center mb-0">Tidak ada produk</p>
                </x-alert>
            @endforelse
        </div>
        @if (count($latestProduct) > 0)
        <div class="d-flex justify-content-center">
            <a href="{{ route('products.index') }}" class="btn btn-outline-orange btn-lg rounded-3 px-5">Show More</a>
        </div>
        @endif

        <!-- best seller propduct -->
        <hr>
        <h3 class="text-center mt-5">Best Seller Product</h3>
        <div class="row my-5 gy-4 gx-3 mx-3 justify-content-center">
            @forelse ($bestSellerProduct as $product)
                <div class="col-lg-3 col-md-6">
                    @include('product.item', [
                        'name' => $product->name,
                        'category' => $product->productCategory->name,
                        'price' => $product->price,
                        'id' => $product->id,
                        'image' => $product->image,
                        'type' => 'best'
                    ])
                </div>
            @empty
                <x-alert :is-dismissable="false" type="secondary" class="mb-0">
                    <p class="text-center mb-0">Tidak ada produk best seller</p>
                </x-alert>
            @endforelse
        </div>

        <!-- promo propduct -->
        <hr>
        <h3 class="text-center mt-5">Product Promo</h3>
        <div class="row my-5 gy-4 gx-3 mx-3 justify-content-center">
            @forelse ($promoProduct as $product)
                <div class="col-lg-3 col-md-6">
                    @include('product.item', [
                        'name' => $product->name,
                        'category' => $product->productCategory->name,
                        'price' => $product->price,
                        'id' => $product->id,
                        'image' => $product->image,
                        'type' => 'promo'
                    ])
                </div>
            @empty
                <x-alert :is-dismissable="false" type="secondary" class="mb-0">
                    <p class="text-center mb-0">Tidak ada produk promo</p>
                </x-alert>
            @endforelse
        </div>

        <!-- sign up section -->
        <h3 class="my-3">
            Bingung cari produk untuk kemasan bisnismu? <br> Temukan kebutuhan produk bisnismu di sini!
        </h3>
        <h5>
            Mudah, Aman, dan Terpercaya!
        </h5>
        <div class="d-grid d-sm-block">
            <a href="{{ route('register') }}" 
            class="btn btn-orange btn-lg rounded-3 px-5 mt-3 me-4">
                Daftar
            </a>
            <a href="{{ route('faq.index') }}" 
            class="btn btn-outline-secondary btn-lg rounded-3 px-5 mt-3">
                Bantuan
            </a>
        </div>

        <!-- contact us section -->
        <h2 class="mt-4 mb-5 text-center">
            <span class="border-bottom border-dark border-2">Tim Support</span>
        </h2>
        <div class="row mt-5 align-items-center" id="section-kontak">
            <div class="col-md-6 mb-5">
                <img data-src="{{ asset('img/static/contact-us.png') }}" 
                class="d-block mx-auto lazy" height="300px" draggable="false">
            </div>
            <div class="col-md-6 mb-5">
                <h3 class="fw-bold mb-4">Perlu Bantuan?</h3>
                <p>Customer service kami siap melayani anda dari jam 08.00 WIB – 20.00</p>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('feedback.send') }}" method="POST">
                    @csrf
                    <x-input-bootstrap id="contactName" label="Name" name="name" required/>
                    <x-input-bootstrap type="email" id="contactEmail" label="Email" 
                    name="email" required/>
                    <x-input-bootstrap type="tel" id="contactPhone" label="Phone" 
                    name="phone" required/>
                    <x-input-bootstrap type="textarea" id="contactMessage" 
                    label="Message" name="message" rows="5" required/>
                    <button type="submit"
                    class="btn btn-sm btn-orange btn-lg rounded-3 px-5 col-12 col-lg-auto">
                        Kirim
                    </button>
                </form>
                <a href="https://whatsapp.me/6285608489389" 
                class="btn btn-sm btn-success mt-3" target="_blank">
                    Kontak Whatsapp Saja
                </a>
            </div>
        </div>
    </div>

    @foreach ($latestProduct as $product)
        @include('partials.product-detail-modal', ['product' => $product, 'type' => 'new'])
    @endforeach

    @foreach ($bestSellerProduct as $product)
        @include('partials.product-detail-modal', ['product' => $product, 'type' => 'best'])
    @endforeach

    @foreach ($promoProduct as $product)
        @include('partials.product-detail-modal', ['product' => $product, 'type' => 'promo'])
    @endforeach

@endsection

@push('scripts')
    <script>
        @if($errors->any())
            document.querySelector('form').scrollIntoView()
        @endif
    </script>
@endpush