@extends('layouts.customer')

@section('content')
<div class="konten">
    <div class="container">
        <div class="row">
            @include('faq.header')
            @forelse ($faqs as $faq)
                <div class="col-sm-6">
                    <h4>
                        <b>{{ $faq->title }}</b>
                    </h4>
                    <p>{{ $faq->detail }}</p>
                </div>
            @empty
                <div>Tidak ada faq</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
