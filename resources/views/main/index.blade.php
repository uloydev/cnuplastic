@extends('layouts.customer')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousels as $carousel)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $carousel->path_img }}" class="img-fluid">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="text-white fw-bold m-0">Find Any Product?</h1>
                            <a href="{{ route('products.index') }}" class="btn btn-lg btn-orange mt-4 rounded-3">Shop
                                Now</a>
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
        <h4 class="text-center">New Product</h4>
        <div class="row my-5 gy-3 gx-1 justify-content-center">
            @foreach ($latestProduct as $product)
                <div class="col-lg-3 col-md-6">
                    @include('product.item', [
                    'name' => $product->name,
                    'category' => $product->productCategory->name,
                    'price' => $product->price,
                    'id' => $product->id,
                    'image' => $product->image
                    ])
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-outline-orange btn-lg rounded-3 px-5">Show More</a>
        </div>

        <!-- sign up section -->
        <h3 class="mt-5">Have a product to sell? Sell your product here!</h3>
        <h5 class="my-3">Easy, Secure, and Free!</h5>
        <a href="#" class="btn btn-orange btn-lg rounded-3 px-5 mt-3">SIGN UP NOW</a>
        <a href="#" class="btn btn-outline-secondary btn-lg rounded-3 ms-3 px-5 mt-3">Learn More</a>

        <!-- contact us section -->
        <div class="row mt-5 align-items-center">
            <div class="col-md-6 mb-5">
                <img src="image/email.png" class="d-block w-50 mx-auto">
            </div>
            <div class="col-md-6 mb-5">
                <h3 class="fw-bold mb-4">Contact Us</h3>
                <form>
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="contactName">
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="contactEmail">
                    </div>
                    <div class="mb-3">
                        <label for="contactPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="contactPhone">
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="contactMessage" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-orange btn-lg rounded-3 px-5">SEND</button>
                </form>
            </div>
        </div>
    </div>

    <!-- product detail modal -->
    <div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailModalLabel">Product Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="image/laptop.jpg" class="d-block w-100 rounded-3 border border-dark">
                        </div>
                        <div class="col-8">
                            <div class="fw-bold mb-1">Laptop Kenceng</div>
                            <div class="text-muted mb-1">Elektronik</div>
                            <h4>Rp 3.000.000</h4>
                            <div class="border border-1 border-start-0 border-end-0 border-dark my-2 py-1">Product
                                Description</div>
                            <div class="border border-1 border-start-0 border-end-0 border-top-0 border-dark pb-2">
                                Kemeja pria super nyaman cocok untuk pakaian kantor.
                                Pilihan Warna :
                                Putih
                                Hitam
                                Abu-abu
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <div class="d-flex align-items-center">
                                    <img src="image/toko.png" class="d-inline-block mx-3" width="50px">
                                    <div class="d-inline-block">
                                        <p class="mb-0 fw-bold">Boy Style</p>
                                        <p class="mb-0 text-muted">Ghani Fadillah</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-success btn-sm fw-bold rounded-3">
                                    <box-icon name='whatsapp' type='logo' color='#ffffff' class="align-middle"></box-icon>
                                    <span class="align-middle">CHAT NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
