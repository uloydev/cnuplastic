@extends('layouts.customer')

@section('content')
<div class="container my-5">
    <div class="rounded-3 px-5 py-4 shadow">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="fw-bold text-orange mb-4">
                    Toko {{ config('app.name') }}
                </h2>
                <div>
                    <p class="mb-5">
                        CNU Plastic atau  CV Catur Naga Utama berdiri pada tahun 2019. CV Catur Naga Utama hadir sebagai sebuah perusahaan yang bergerak di bidang produk industri plastik, yang memberikan atau memasok produk industri plastik kepada UMKM dan juga para pelaku bisnis sebagai wadah untuk produk mereka. 
                    </p>
                    <p class="mb-4">
                        CV Catur Naga Utama memberikan banyak pilihan katalog untuk produk plastik, jadi pelanggan bisa lebih fleksible dan lebih leluasa untuk menyesuaikan jenis produk apa yang mereka pilih untuk kebutuhan bisnis mereka. CV Catur Naga Utama ini meyediakan segala macam jenis kebutuhan berdasarkan banyak kategori seperti rumah tangga, makanan, minuman, kosmetik, kesehatan, alat medis, dan lainnya dengan kualitas terbaik.
                    </p>
                </div>
                <h4 class="fw-bold mb-3">Our Services</h4>
                <div class="d-md-flex align-items-center mt-5">
                    <img src="image/group.png" class="d-block w-25 mx-auto mx-sm-5 mb-3" alt="">
                    <div>
                        <p class="fw-bolder">For more information, contact us!</p>
                        <p class="mb-2">
                            <box-icon name='phone-call' color='#FC3515' class="align-middle me-3"></box-icon>
                            {{ $contacts[1]->username }}
                        </p>
                        <p class="mb-2">
                            <box-icon name='mail-send' color='#FC3515' class="align-middle me-3"></box-icon>
                            {{ $contacts[2]->username }}
                        </p>
                        <a href="https://api.whatsapp.com/send?phone={{ $contacts[1]->username }}" class="rounded-circle me-2">
                            <img src="image/whatsapp.png"alt="" width="40px">
                        </a>
                        <a href="https://instagram.com/{{ str_replace('@', '', $contacts[0]->username) }}" class="rounded-circle">
                            <img src="image/instagram.png"alt="" width="40px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-start">
                <img data-src="{{ asset('img/icon/logo.png') }}" 
                class="d-block w-100 lazy" alt=""
                data-bg="{{ asset('img/static/placeholder-image.png') }}" >
            </div>
        </div>
    </div>
</div>
@endsection