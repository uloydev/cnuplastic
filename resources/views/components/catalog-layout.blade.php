@extends('layouts.customer')

@section('content')

    <div class="row g-0 mt-2 flex-grow-1">
        
        <div class="col-md-4 col-lg-3 bg-light sidebar">
            <div class="px-4 pt-3 fw-bold">
                <img src="{{asset('image/dot.png')}}" class="me-3" width="30px" 
                alt="{{ config('app.name') . " Merchandise" }}">
                <span class="align-middle">Merchandise Category</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('merchandise.index') }}" 
                    class="nav-link {{ !request()->has('cat') ? 'active text-white' : 'text-dark' }}">
                        All
                    </a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a href="{{ route('merchandise.index', ['cat' => $category->id]) }}" class="nav-link link-dark 
                        {{ request()->cat == $category->id ? 'active' : '' }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-md-8 col-lg-9">
            <div class="mx-5">
                @include('partials.catalog-search')
                <div class="row my-5 gy-3 gx-1">
                    {{ $slot }}
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5">
                {{-- {{ $products->links() }} --}}
            </div>
        </div>
    </div>

    {{-- @foreach ($products as $product)
        @include('partials.merchandise-detail-modal', ['product' => $product])
    @endforeach --}}

@endsection
