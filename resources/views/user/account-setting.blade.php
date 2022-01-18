@extends('layouts.user')

@section('header')
    Account Setting
@endsection


@section('content')
    <div class="card">
        <div class="card-primary">
            <form enctype="multipart/form-data" method="post" action="{{ route('user.update-account') }}">
                @csrf @method('PUT')
                <div class="card-body">
                    <div class="form-divider">
                        User Profile
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input value="{{ auth()->user()->name }}" type="text" class="form-control" name="name" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input value="{{ auth()->user()->email }}" type="text" class="form-control" name="email" tabindex="1" required disabled>
                    </div>
                    <div class="form-group">
                        <label>WhatsApp Number</label>
                        <input value="{{ auth()->user()->whatsapp }}" type="text" class="form-control" name="whatsapp" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Date of birth</label>
                        <input value="{{ auth()->user()->date_of_birth }}" type="date" class="form-control" name="date_of_birth" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address">{{ auth()->user()->address }}</textarea>
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
