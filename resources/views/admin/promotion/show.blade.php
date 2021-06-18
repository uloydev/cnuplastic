@extends('layouts.admin')
@section('header')
    Detail Request Promotion
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image"
                        src="{{ $promotion->product->image ? Storage::url($promotion->product->image) : 'http://via.placeholder.com/200' }}"
                        style="width: 220px">
                </div>
                <div class="form-group">
                    <label>Seller Name</label>
                    <h6>{{ $promotion->user->name }}</h6>
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <h6>{{ $promotion->user->identity_id }}</h6>
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <h6>{{ $promotion->product->name }}</h6>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <h6>RP {{ $promotion->product->price }}</h6>
                </div>
                <div class="form-group">
                    <label>Decription</label>
                    <h6>
                        {{ $promotion->product->description }}
                    </h6>
                </div>
                <hr>
                <div class="form-group">
                    <label>Category</label>
                    <h6>{{ $promotion->product->productCategory->name }}</h6>
                </div>
                <div class="form-group">
                    <label>WhatsApp Number</label>
                    <h6>{{ $promotion->user->whatsapp }}</h6>
                </div>
                <div class="form-group">
                    <label>Requested At</label>
                    <h6>{{ $promotion->created_at->format('d M Y H:i') }}</h6>
                </div>
                <div class="form-group">
                    <label class="d-block">Status</label>
                    @switch($promotion->status)
                        @case('requested')
                        <div class='badge badge-info font-bold'>Requested</div>
                        @break
                        @case('accepted')
                        <div class='badge badge-success font-bold'>Accepted</div>
                        @break
                        @case('rejected')
                        <div class='badge badge-danger font-bold'>Rejected</div>
                        @break
                    @endswitch
                </div>
                <a href="https://api.whatsapp.com/send?phone={{ $promotion->user->whatsapp }}" class="btn btn-info">
                    <b>CONTACT SELLER</b>
                </a>
                @if ($promotion->status == 'requested')
                    <button id="acceptButton" class="btn btn-success mx-2">
                        <b>ACCEPT</b>
                    </button>
                    <button id="rejectButton" class="btn btn-danger">
                        <b>REJECT</b>
                    </button>
                    <form id="promoteForm" action="{{ route('admin.promotion.update', $promotion->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status">
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#acceptButton').click(() => {
            $('#promoteForm input[name="status"]').val('accepted');
            $('#promoteForm').submit();
        });
        $('#rejectButton').click(() => {
            $('#promoteForm input[name="status"]').val('rejected');
            $('#promoteForm').submit();
        });
    </script>
@endpush
