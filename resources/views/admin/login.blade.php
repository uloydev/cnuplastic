@extends('layouts.auth')

@section('title')
    Admin Login
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                <img src="{{ asset('img/icon/logo.png') }}" class="logo">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                                autofocus value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="d-block">Password
                                <div class="float-right">
                                    <a href="{{ route('password.request') }}" class="forgot">
                                        Forgot Password?
                                    </a>
                                </div>
                            </label>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-oranye btn-block btn-move" tabindex="4">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

