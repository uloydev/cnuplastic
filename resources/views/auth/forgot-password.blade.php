@extends('layouts.auth')

@section('title')
    Forgot Password
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                <img src="{{ asset('img/icon/logo.png') }}" class="logo">
                <div class="card-header">
                    <h5 class="text-center">Forgot Password</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Enter the email address associated with your account.
                    </p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                                autofocus value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-oranye btn-block" tabindex="4">
                                Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
