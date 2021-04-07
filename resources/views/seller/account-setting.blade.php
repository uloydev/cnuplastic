@extends('layouts.seller')

@section('header')
    Account Setting
@endsection


@section('content')
    <div class="card">
        <div class="card-primary">
            <form enctype="multipart/form-data" method="post" action="{{ route('seller.update-account') }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-divider">
                        Seller Profile
                    </div>
                    <hr>
                    <div class="img-detail">
                        <img alt="image" src="{{ $user->avatar ? Storage::url($user->avatar) : 'http://via.placeholder.com/200' }}">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" class="form-control" name="avatar" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input value="{{ $user->name }}" type="text" class="form-control" name="name" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Store Name</label>
                        <input value="{{ $user->store }}" type="text" class="form-control" name="store" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>WhatsApp Number</label>
                        <input value="{{ $user->whatsapp }}" type="text" class="form-control" name="whatsapp" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Store Description</label>
                        <textarea class="summernote-simple" name="store_description">{{ $user->store_description }}</textarea>
                    </div><br>
                    <div class="form-divider">
                        Account Setting
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Password</label>
                        <input value="" type="password" class="form-control" name="password" tabindex="1">
                    </div><br>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                            <b>SAVE</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
