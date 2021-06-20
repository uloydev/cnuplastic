@extends('layouts.customer')

@section('content')
<div class="container my-5">
    <div class="rounded-3 px-5 py-4 shadow">
        <h5 class="text-orange text-center mb-3">FAQ</h5>
        <h1 class="fw-bold text-orange text-center mb-5">Have any question?</h1>
        
        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            @foreach (config('app.faq_enum') as $category)
            <li class="nav-item" role="presentation">
                <button class="nav-link @if($loop->first) active @endif" id="{{ $category }}-tab" data-bs-toggle="pill" data-bs-target="#{{ $category }}"
                type="button" role="tab" aria-controls="{{ $category }}" aria-selected="true">
                    {{ $category }}
                </button>
            </li>
            @endforeach
        </ul>
        
        <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="row justify-content-evenly g-5">
                    @each('partials.faq-card', $faqGeneral, 'faq')
                </div>
            </div>
            <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                <div class="row justify-content-evenly g-5">
                    @each('partials.faq-card', $faqSeller, 'faq')
                </div>
            </div>
            <div class="tab-pane fade" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
                <div class="row justify-content-evenly g-5">
                    @each('partials.faq-card', $faqBuyer, 'faq')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
