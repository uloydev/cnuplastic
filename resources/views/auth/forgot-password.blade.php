@extends('layouts.auth')

@section('title')
    Forgot Password
@endsection

@section('content')
    @if($message = Session::get('status'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Status</strong> {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                <center><img src="{{ asset('img/avatar/jempol.png') }}" class="logo"></center>
                <div class="card-header">
                    <h4 class="text-center">Forgot Password</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Enter the email address associated with your account.</p>
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
