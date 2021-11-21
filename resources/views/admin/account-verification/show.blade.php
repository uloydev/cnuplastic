@extends('layouts.admin')
@section('header')
    Detail Seller
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="img-detail">
                    <img alt="image"
                        src="{{ $seller->avatar ? Storage::url($seller->avatar) : 'http://via.placeholder.com/200' }}"
                        style="width: 220px">
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <h6>{{ $seller->identity_id }}</h6>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <h6>{{ $seller->name }}</h6>
                </div>
                <div class="form-group">
                    <label>Profession</label>
                    <h6>{{ $seller->profession }}</h6>
                </div>
                <hr>
                <div class="form-group">
                    <label>WhatsApp Number</label>
                    <h6>{{ $seller->whatsapp }}</h6>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <h6>{{ $seller->email }}</h6>
                </div>
                <div class="form-group">
                    <label class="d-block">Identity Card</label>
                    <div class="mb-3">
                        <img alt="image" src="{{ Storage::url($seller->identity_card) }}"
                            style="min-width: 33%; max-width:400px;">
                    </div>
                    <a href="{{ Storage::url($seller->identity_card) }}"
                        class="btn btn-primary" download>Download Identity Card</a>
                </div>
                <h6>Action</h6>
                <button id="acceptButton" class="btn btn-success mx-2">
                    <b>ACCEPT</b>
                </button>
                <button id="rejectButton" class="btn btn-danger">
                    <b>REJECT</b>
                </button>
                <form id="verificationForm" action="{{ route('admin.account-verification.update', $seller->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="verification_status">
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#acceptButton').click(() => {
            $('#verificationForm input[name="verification_status"]').val('verified');
            $('#verificationForm').submit();
        });
        $('#rejectButton').click(() => {
            $('#verificationForm input[name="verification_status"]').val('rejected');
            $('#verificationForm').submit();
        });
    </script>
@endpush
