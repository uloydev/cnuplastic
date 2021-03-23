@extends('layouts.admin')
@section('header')
    Data Product
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <h4>Tabel Data Product</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Store Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>Rp. {{ $product->price }}</td>
                                <td>{{ $product->productCategory->name }}</td>
                                <td>{{ $product->user->store }}</td>
                                <td>
                                    <a href="{{ route('admin.product.show', $product->id) }}" value="" name="detail" class="btn btn-sm btn-oranye">
                                        <span class="ion-search" aria-hidden="true"></span>
                                    </a>
                                    <form method="post" id="deleteForm{{ $product->id }}" action="{{ route('admin.product.destroy', $product->id) }}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <button type="submit" form="deleteForm{{ $product->id }}" class="btn btn-sm btn-danger">
                                        <span class="ion-trash-a" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
