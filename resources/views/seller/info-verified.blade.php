@extends('layouts.seller')

@section('header')
    Account Verification
@endsection


@section('content')
<div class="card">
    <div class="card-body">
        <center style="margin: 20px">
            @if ($verificationStatus == 'verified')
            <img src="{{ asset('img/icon/verified.png') }}" width="70px" class="mb-4">
            <h5>
                <b>Selamat! Akun anda sudah diverifikasi.</b>
            </h5>
            <p style="color: #666">Silakan mulai unggah dan promosikan produk anda!</p>
            @else
            <h5>
                <b>Akun sedang diproses verifikasi!</b>
            </h5>
            <p style="color: #666">
                Silakan tunggu dalam waktu 3 x 24 jam untuk mendapatkan notifikasi.
            </p>
            @endif
        </center>
    </div>
</div>
@endsection