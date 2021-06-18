@extends('layouts.seller')

@section('header')
    Account Verification
@endsection


@section('content')

<div class="card">
    <div class="card-primary">
        <form enctype="multipart/form-data" method="post"
        action="{{ route('seller.account-verification') }}">
            @csrf
            <div class="card-body">
                <center style="margin: 20px">
                    @if($verificationStatus == 'not_verified')
                    <h5>
                        <b>Akun anda belum diverifikasi!</b>
                    </h5>
                    <p style="color: #666">
                        Verifikasi akun terlebih dahulu agar dapat mengunggah produk anda.
                    </p>
                    @else
                    <h5>
                        <b>Verifikasi akun anda ditolak admin!</b>
                    </h5>
                    <p style="color: #666">
                        Silahkan ulangi verifikasi untuk dapat mengunggah produk.
                    </p>
                    @endif
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

@endsection