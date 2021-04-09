<div class="modal fade" id="detail-modal-{{ $modalId }}" tabindex="-1"
    aria-hidden="true" aria-labelledby="detailModal{{ ucfirst($modalId) }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    {{ $productTitle }}
                </h5>
                <a href="javascript:void(0)" data-dismiss="modal" class="btn-close" aria-hidden="true">&times;</a>
            </div>
            <div class="modal-body">
                <img src="{{ $productImg }}" alt="{{ $productTitle }}">
                <p>{{ $productDesc }}</p>
            </div>
        </div>
    </div>
</div>