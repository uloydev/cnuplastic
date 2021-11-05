@extends('layouts.admin')
@section('header')
    <a href="{{ route('admin.product.index') }}" class="mr-2">
        <i class="ion ion-android-arrow-back"></i>
    </a>
    Product Best Seller
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
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bestSeller as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    Rp. {{ $product->price }}
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


@push('scripts')
    <script>
        $('.delete-btn').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apa anda yakin ingin menghapus product ini?',
                text: '',
                showCancelButton: true,
                confirmButtonText: `Delete`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('#' + $(this).attr('form')).submit()
                }
            });
        });
    </script>
@endpush

