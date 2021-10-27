<div class="border border-dark rounded-3 h-100 d-flex flex-column justify-content-between">
    <img data-src="{{ Storage::url($image) }}" 
    data-bg="{{ asset('img/static/placeholder-image.png') }}" 
    class="d-block w-100 lazy" height="300px" draggable="false">
    <div class="p-3">
        <h5 class="">{{ $name}}</h5>
        <p class="my-3">{{ $category }}</p>
        <div class="d-flex justify-content-between">
            <a href="javascript:void(0);" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
                data-bs-target="#productDetailModal{{ $id }}">Detail</a>
            <span class="text-orange">
                Rp {{ number_format($price) }}
            </span>
        </div>
    </div>
</div>