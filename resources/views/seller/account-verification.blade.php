@extends('layouts.seller')

@section('header')
    Account Verification
@endsection


@section('content')
    @switch($user->verification_status)
        @case('not_verified')
        <div class="card">
            <div class="card-primary">
                <form enctype="multipart/form-data" method="post" action="{{ route('seller.account-verification') }}">
                    @csrf
                    <div class="card-body">
                        <center style="margin: 20px">
                            <h5><b>Akun anda belum diverifikasi!</b></h5>
                            <p style="color: #666">Verifikasi akun terlebih dahulu agar dapat mengunggah produk anda.</p>
                        </center>
                        <div class="form-group">
                            <label>Unggah foto KTP/Kartu Pengenal (jpg/png/jpeg) (max 2mb)</label>
                            <input type="file" class="form-control" name="identity_card" tabindex="1" required>
                        </div><br>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                                <b>UPLOAD</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @break
        @case('verified')
        <div class="card-body">
            <center style="margin: 20px">
                <img src="{{ asset('img/icon/verified.png') }}" style="width: 70px; margin-bottom: 30px">
                <h5><b>Selamat! Akun anda sudah diverifikasi.</b></h5>
                <p style="color: #666">Silakan mulai unggah dan promosikan produk anda!</p>
            </center>
        </div>
        @break
        @case('requested')
        <div class="card-body">
            <center style="margin: 20px">
                <h5><b>Akun sedang diproses verifikasi!</b></h5>
                <p style="color: #666">Silakan tunggu dalam waktu 3 x 24 jam untuk mendapatkan notifikasi.</p>
            </center>
        </div>
        @break
        @case('rejected')
        <div class="card">
            <div class="card-primary">
                <form enctype="multipart/form-data" method="post" action="{{ route('seller.account-verification') }}">
                    @csrf
                    <div class="card-body">
                        <center style="margin: 20px">
                            <h5><b>Verifikasi akun anda ditolak admin!</b></h5>
                            <p style="color: #666">Silahkan ulangi verifikasi untuk dapat mengunggah produk.</p>
                        </center>
                        <div class="form-group">
                            <label>Unggah foto KTP/Kartu Pengenal (jpg/png/jpeg) (max 2mb)</label>
                            <input type="file" class="form-control" name="identity_card" tabindex="1" required>
                        </div><br>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                                <b>UPLOAD</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @break
        @default
    @endswitch
@endsection
