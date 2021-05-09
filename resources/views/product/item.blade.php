<div class="border border-dark m-1 py-2 px-2 rounded-3 h-100 d-flex flex-column justify-content-between">
    <div>
        <img src="{{ $image ? Storage::url($image) : 'http://via.placeholder.com/200' }}" class="d-block w-100">
        <h5 class="">{{ $name}}</h5>
        <p class="my-3">{{ $category }}</p>
    </div>
    <div class="d-flex justify-content-between">
        <a href="javascript:void(0);" class="btn btn-sm btn-navy rounded-3" data-bs-toggle="modal"
            data-bs-target="#productDetailModal{{ $id }}">Detail</a>
        <span class="text-orange">
            Rp {{ number_format($price) }}
        </span>
    </div>
</div>