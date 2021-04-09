<div class="modal fade" id="detail-product-{{ $product->id }}" tabindex="-1"
    aria-hidden="true" aria-labelledby="detailProduct{{ ucfirst($product->id) }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ ucwords($product->name) }}
                </h5>
                <a href="javascript:void(0)" data-dismiss="modal" class="btn-close" aria-hidden="true">&times;</a>
            </div>
            <div class="modal-body">
                <img src="{{ $product->image ? Storage::url($product->image) : 
                'http://via.placeholder.com/200' }}" alt="{{ ucwords($product->name) }}">
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>