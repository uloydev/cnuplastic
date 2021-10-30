@extends('layouts.customer')

@section('content')

    <div class="row g-0 mt-2 flex-grow-1">
        
        @include('partials.catalog.sidebar', ['catalogName' => 'products'])
        
        <div class="col-md-8 col-lg-9">
            <div class="mx-5">
                @include('partials.catalog.search')
                <div class="row my-5 gy-3 gx-1">
                    @forelse ($products as $product)
                        <div class="col-lg-3 col-md-6">
                            @include('product.item', [
                                'name' => $product->name,
                                'category' => $product->productCategory->name,
                                'price' => $product->price,
                                'id' => $product->id,
                                'image' => $product->image,
                                'type' => 'all'
                            ])
                        </div>
                    @empty
                        <x-alert type="info" :is-dismissable="false" class="text-center" message="Tidak ada product"/>
                    @endforelse
                </div>
            </div>
            @include('partials.catalog.pagination')
        </div>
    </div>

    @foreach ($products as $product)
        @include('partials.product-detail-modal', ['product' => $product, 'type' => 'all'])
    @endforeach

@endsection
