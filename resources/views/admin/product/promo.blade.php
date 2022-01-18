@extends('layouts.admin')
@section('header')
    <a href="{{ route('admin.product.index') }}" class="mr-2">
        <i class="ion ion-android-arrow-back"></i>
    </a>
    Product Promo
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promos as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    Rp. {{ number_format($product->price) }}
                                </td>
                                <td>
                                    {{ number_format($product->stock) }}
                                </td>
                                <td>
                                    {{ $product->productCategory->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection