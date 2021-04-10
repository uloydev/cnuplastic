@extends('layouts.seller')

@section('header')
    Data Product
@endsection


@section('content')
    <a href="{{ route('seller.product.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
        <i class="ion ion-plus-round" style="margin-right: 10px"></i>
        Add Another Product
    </a>
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <span>Tabel Data Product</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>Rp. {{ $product->price }}</td>
                                <td>{{ $product->productCategory->name }}</td>
                                <td>
                                    <form method="post" id="deleteForm{{ $product->id }}"
                                        action="{{ route('seller.product.destroy', $product->id) }}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <a href="{{ route('seller.product.show', $product->id) }}" name="detail"
                                        class="btn btn-sm btn-oranye btn-move">
                                        <span class="ion-search" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" form="deleteForm{{ $product->id }}"
                                        class="btn btn-sm btn-danger m-2">
                                        <span class="ion-trash-a" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center">Tidak ada produk untuk ditampilkan</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
