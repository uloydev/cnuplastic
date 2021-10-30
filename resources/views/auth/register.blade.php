@extends('layouts.auth')

@section('title')
    Register Seller
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
                <div class="text-center">
                    <img src="{{ asset('img/icon/logo.png') }}" height="100px">
                </div>
                <div class="card-header">
                    <h5 class="text-center">Register</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="full_name">Full Name</label>
                                <input id="full_name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="waNumber">WhatsApp Number</label>
                            <input id="waNumber" type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp') }}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password" class="d-block">Confirm Password</label>
                            <input id="password" type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-oranye btn-block">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
