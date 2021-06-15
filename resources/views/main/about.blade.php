@extends('layouts.customer')

@section('content')
<div class="container my-5">
    <div class="rounded-3 px-5 py-4 shadow">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="fw-bold text-orange mb-4">ABOUT US</h2>
                <p class="mb-5">
                    Jempol adalah Jembatan Penjualan Online yang wewadahi seluruh masyarakat UPN Veteran Jakarta
                    untuk berjualan online dan mengenalkan produknya untuk dijual di lingkungan internal kampus UPN
                    Veteran Jakarta.
                </p>
                <h4 class="fw-bold mb-3">Our Services</h4>
                <div class="row g-2">
                    <div class="col-md-3">
                        <div class="border border-2 rounded-3 p-3 h-100 d-flex flex-column justify-content-center">
                            <img src="image/security.png" class="d-block w-50 mx-auto" alt="">
                            <p class="text-center fw-bold mb-0">Secure</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border border-2 rounded-3 p-3 h-100 d-flex flex-column justify-content-center">
                            <img src="image/tap.png" class="d-block w-50 mx-auto" alt="">
                            <p class="text-center fw-bold mb-0">Easy To use</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border border-2 rounded-3 p-3 h-100 d-flex flex-column justify-content-center">
                            <img src="image/browser.png" class="d-block w-50 mx-auto" alt="">
                            <p class="text-center fw-bold mb-0">Free Register</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border border-2 rounded-3 p-3 h-100 d-flex flex-column justify-content-center">
                            <img src="image/promotion.png" class="d-block w-50 mx-auto" alt="">
                            <p class="text-center fw-bold mb-0">Request Promotion</p>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex align-items-center mt-5">
                    <img src="image/group.png" class="d-block w-25 mx-auto mx-sm-5 mb-3" alt="">
                    <div>
                        <p class="fw-bolder">For more information, contact us!</p>
                        <p class="mb-2">
                            <box-icon name='phone-call' color='#FC3515' class="align-middle me-3"></box-icon>
                            085817922089
                        </p>
                        <p class="mb-2">
                            <box-icon name='mail-send' color='#FC3515' class="align-middle me-3"></box-icon>
                            jempolupnvj@gmail.com
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6285817922089" class="rounded-circle me-2">
                            <img src="image/whatsapp.png"alt="" width="40px">
                        </a>
                        <a href="https://instagram.com/jempol.upnvj" class="rounded-circle">
                            <img src="image/instagram.png"alt="" width="40px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-around">
                <img src="image/jempol.png" class="d-block w-100" alt="">
                <div>
                    <h4 class="text-center fw-bold mb-4">Created By</h4>
                    <img src="image/logo/mardhika.png" class="d-block w-25 mx-auto" alt="">
                    <div class="d-flex justify-content-evenly">
                        <img src="image/logo/kesekretariatan.png" class="d-block w-25" alt="">
                        <img src="image/logo/kominfo.png" class="d-block w-25" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection