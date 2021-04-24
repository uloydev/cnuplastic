@extends('layouts.customer')

@section('content')
<div class="container my-5">
    <div class="rounded-3 px-5 py-4 shadow">
        <h5 class="text-orange text-center mb-3">FAQ</h5>
        <h1 class="fw-bold text-orange text-center mb-5">Have any question?</h1>
        <!-- tabs -->
        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general"
                    type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="seller-tab" data-bs-toggle="pill" data-bs-target="#seller"
                    type="button" role="tab" aria-controls="seller" aria-selected="false">Seller</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="buyer-tab" data-bs-toggle="pill" data-bs-target="#buyer" type="button"
                    role="tab" aria-controls="buyer" aria-selected="false">Buyer</button>
            </li>
        </ul>
        <!-- tab data -->
        <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row justify-content-evenly g-5">
                    @foreach ($faqGeneral as $faq)
                    <div class="col-lg-5 py-3 px-4 rounded-3 shadow">
                        <p class="fw-bold">Lorem ipsum dolor sit amet ?</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi aut quasi asperiores
                            quis impedit doloribus beatae at est itaque temporibus! Recusandae voluptates veritatis
                            nulla natus vel nesciunt ad! Odit eius temporibus dolores aliquid accusamus dolorum,
                            harum exercitationem quo explicabo, veritatis excepturi rem, iure rerum iusto ad maxime
                            nemo hic? Sint.
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                <div class="row justify-content-evenly g-5">
                    @foreach ($faqSeller as $faq)
                    <div class="col-lg-5 py-3 px-4 rounded-3 shadow">
                        <p class="fw-bold">Lorem ipsum dolor sit amet ?</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi aut quasi asperiores
                            quis impedit doloribus beatae at est itaque temporibus! Recusandae voluptates veritatis
                            nulla natus vel nesciunt ad! Odit eius temporibus dolores aliquid accusamus dolorum,
                            harum exercitationem quo explicabo, veritatis excepturi rem, iure rerum iusto ad maxime
                            nemo hic? Sint.
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
                <div class="row justify-content-evenly g-5">
                    @foreach ($faqBuyer as $faq)
                    <div class="col-lg-5 py-3 px-4 rounded-3 shadow">
                        <p class="fw-bold">Lorem ipsum dolor sit amet ?</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi aut quasi asperiores
                            quis impedit doloribus beatae at est itaque temporibus! Recusandae voluptates veritatis
                            nulla natus vel nesciunt ad! Odit eius temporibus dolores aliquid accusamus dolorum,
                            harum exercitationem quo explicabo, veritatis excepturi rem, iure rerum iusto ad maxime
                            nemo hic? Sint.
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
