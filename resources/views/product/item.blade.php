<div class="border border-dark m-1 py-3 px-2 rounded-3">
    <img src="{{ asset('image/laptop.jpg') }}" class="d-block w-100">
    <h5 class="">{{ Str::words($product->name, 3) }}</h5>
    <p class="my-3">{{ $product->productCategory->name }}</p>
    <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
            data-bs-target="#productDetailModal">Detail</a>
        <span class="text-orange">
            Rp {{ number_format($product->price) }}
        </span>
    </div>
</div>