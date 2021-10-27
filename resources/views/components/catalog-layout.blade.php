@extends('layouts.customer')

@section('content')

    <div class="row g-0 mt-2 flex-grow-1">
        
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

@endsection
