<div class="modal fade" id="productDetailModal{{ $type }}{{ $product->id }}" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row align-items-start">
                    <div class="col-lg-4">
                        <img data-src="{{ Storage::url($product->image) }}"
                            class="d-block w-100 rounded-3 border border-dark lazy" height="300px">
                    </div>
                    <div class="col-lg-8">
                        <div class="fw-bold mb-1">{{ $product->name }}</div>
                        <div class="text-muted mb-1">
                            {{ $product->productCategory->name }}
                        </div>
                        <h4>Rp {{ number_format($product->price) }}</h4>
                        <p class="mt-4">Stock : {{ number_format($product->stock) }}</p>
                        <div class="border border-1 border-start-0 border-end-0 border-dark my-2 py-1">
                            Product Description
                        </div>
                        <div class="border border-1 border-start-0 border-end-0 border-top-0 border-dark pb-2 mb-4">
                            {!! $product->description !!}
                        </div>
                        <div class="d-flex justify-content-between mt-3 align-items-center">

                            <a href="https://api.whatsapp.com/send?phone={{ $contacts[1]->username }}"
                                class="btn btn-success fw-bold rounded-3">
                                <box-icon name='whatsapp' type='logo' color='#ffffff' class="align-middle"></box-icon>
                                <span class="align-middle">CHAT NOW</span>
                            </a>
                        </div>
                        <form action="{{ route('user.order.store') }}" method="post" class="mt-5">
                            @csrf
                            @if ($product->stock <= 0)
                                <div class="d-grid mt-3">
                                    <button type="button" class="btn btn-secondary fw-bold rounded-3">Maaf, Stok Kosong</button>
                                </div>
                            @else
                                <label for="exampleFormControlInput1" class="form-label">Order Quantity</label>
                                <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity"
                                    min="1" value="1" name="quantity" required>
                                <div class="d-grid mt-3">
                                    <button type="submit" class="btn btn-primary fw-bold rounded-3">Order Now</button>
                                </div>
                            @endif
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
