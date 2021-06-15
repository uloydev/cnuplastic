<div class="modal fade" id="productDetailModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row align-ittems-start">
                    <div class="col-lg-4">
                        <img src="{{ $product->image ? Storage::url($product->image) : 'http://via.placeholder.com/200' }}"
                            class="d-block w-100 rounded-3 border border-dark">
                    </div>
                    <div class="col-lg-8">
                        <div class="fw-bold mb-1">{{ $product->name }}</div>
                        <div class="text-muted mb-1">{{ $product->productCategory->name }}</div>
                        <h4>Rp {{ number_format($product->price) }}</h4>
                        <div class="border border-1 border-start-0 border-end-0 border-dark my-2 py-1">
                            Product Description
                        </div>
                        <div class="border border-1 border-start-0 border-end-0 border-top-0 border-dark pb-2 mb-4">
                            {!! $product->description !!}
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                                <img src="{{ $product->user->avatar ? Storage::url($product->user->avatar) : 'http://via.placeholder.com/200' }}"
                                    class="d-inline-block mx-3" width="50px">
                                <div class="d-inline-block">
                                    <p class="mb-0 fw-bold">{{ $product->user->store }}</p>
                                    <p class="mb-0 text-muted">{{ $product->user->name }}</p>
                                </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?phone={{ $product->user->whatsapp }}"
                                class="btn btn-success fw-bold rounded-3">
                                <box-icon name='whatsapp' type='logo' color='#ffffff' class="align-middle"></box-icon>
                                <span class="align-middle">CHAT NOW</span>
                            </a>
                        </div>
                        <div class="row g-3 fw-bold my-3 justify-content-center">
                            @if ($product->link_shopee)
                                <div class="col-md-6">
                                    <a href="{{ $product->link_shopee }}" class="text-white fw-bold btn btn-orange d-block"
                                        target="_blank">
                                        go to shopee
                                    </a>
                                </div>
                            @endif
                            @if ($product->link_tokopedia)
                                <div class="col-md-6">
                                    <a href="{{ $product->link_tokopedia }}" class="text-white fw-bold btn btn-success d-block"
                                        target="_blank">
                                        go to tokopedia
                                    </a>
                                </div>
                            @endif
                            @if ($product->link_bukalapak)
                                <div class="col-md-6">
                                    <a href="{{ $product->link_bukalapak }}" class="text-white fw-bold btn btn-danger d-block"
                                        target="_blank">
                                        go to bukalapak
                                    </a>
                                </div>
                            @endif
                            @if ($product->link_lazada)
                                <div class="col-md-6">
                                    <a href="{{ $product->link_lazada }}" class="text-white fw-bold btn btn-primary d-block"
                                        target="_blank">
                                        go to lazada
                                    </a>
                                </div>
                            @endif
                            @if ($product->link_instagram)
                                <div class="col-md-6">
                                    <a href="{{ $product->link_instagram }}" class="text-white fw-bold btn btn-info d-block"
                                        target="_blank">
                                        go to instagram
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
