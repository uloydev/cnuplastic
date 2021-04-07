@extends('layouts.auth')

@section('title')
    Reset Password
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                <center><img src="{{ asset('img/avatar/jempol.png') }}" class="logo"></center>
                <div class="card-header">
                    <h5 class="text-center">Reset Password</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                                autofocus value="{{ old('email') }}">
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
                            <button type="submit" class="btn btn-oranye btn-block" tabindex="4">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

