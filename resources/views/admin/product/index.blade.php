@extends('layouts.admin')
@section('header')
    <span class="mr-auto">Data Product</span>
    <a href="{{ route('admin.product.best-seller') }}" class="btn btn-primary btn-sm mr-3">See best seller product</a>
    <a href="{{ route('admin.product.promos') }}" class="btn btn-success btn-sm">See promo product</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <a href="{{ route('admin.product.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
                    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
                    Add Another Product
                </a>
            </div>
            <span>Tabel Data Product</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
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
                                <td>
                                    <form method="post" id="deleteForm{{ $product->id }}" 
                                        class="d-inline-block"
                                        action="{{ route('admin.product.destroy', $product->id) }}">
                                        @csrf @method("DELETE")
                                        <button type="submit" class="btn btn-sm btn-danger delete-btn">
                                            <span class="ion-trash-a" aria-hidden="true"></span>
                                        </button>
                                    </form>
                                    <a href="{{ route(
                                        'admin.product.show', $product->id
                                    ) }}" class="btn btn-sm btn-oranye">
                                        <span class="ion-search" aria-hidden="true"></span>
                                    </a>
                                    <form method="post" 
                                        class="d-inline-block"
                                        action="{{ route('admin.product.markAs', $product->id) }}">
                                        @csrf @method("PUT")
                                        <button type="submit" name="mark_as_best_seller"
                                        value="{{ $product->is_best_seller ? 0 : 1 }}"
                                        class="btn btn-sm @if($product->is_best_seller) btn-success @else btn-primary @endif">
                                            @if($product->is_best_seller)
                                                Unmark as best seller
                                            @else
                                                Mark as best seller
                                            @endif
                                        </button>
                                    </form>
                                    <form method="post" 
                                        class="d-inline-block"
                                        action="{{ route('admin.product.markAs', $product->id) }}">
                                        @csrf @method("PUT")
                                        <button type="submit" name="mark_as_promo"
                                        value="{{ $product->is_promo ? 0 : 1 }}"
                                        class="btn btn-sm @if($product->is_promo) btn-success @else btn-primary @endif">
                                            @if($product->is_promo)
                                                Unmark as promo
                                            @else
                                                Mark as promo
                                            @endif
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $('.delete-btn').click(function(e) {
            e.preventDefault();
            var form = $(this).parents('form');

            Swal.fire({
                title: 'Apa anda yakin ingin menghapus product ini?',
                text: '',
                showCancelButton: true,
                confirmButtonText: `Delete`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    form.submit()
                }
            });
        });
    </script>
@endpush

