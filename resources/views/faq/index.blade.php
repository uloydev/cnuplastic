@extends('layouts.customer')

@section('content')
<div class="container my-5">
    <div class="rounded-3 px-5 py-4 shadow">
        <h5 class="text-orange text-center mb-3">FAQ</h5>
        <h1 class="fw-bold text-orange text-center mb-5">Have any question?</h1>
        
        <div class="row">
            @foreach ($faqs as $faq)
                <div class="col-lg-4">
                    <div class="py-3 px-4 rounded-3 shadow">
                        <p class="fw-bold">{{ $faq->title }}</p>
                        <p>{{ $faq->detail }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
