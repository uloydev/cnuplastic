@extends('layouts.user')

@section('header')
    {{ $title }}
@endsection


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <span>Tabel {{ $title }}</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Price Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>Rp. {{ $order->product_price }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>Rp. {{ $order->price_total }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <a href="{{ route('user.order.show', $order->id) }}" class="btn btn-sm btn-oranye btn-move">
                                        <span class="ion-search" aria-hidden="true"></span>
                                    </a>
                                    @if ($order->status == 'unpaid')
                                        <a href="{{ route('user.order.pay', $order->id) }}" class="btn btn-sm btn-success btn-move">
                                            <span class="ion-cash" aria-hidden="true"></span> Pay
                                        </a>
                                        <button type="submit" form="deleteForm{{ $order->id }}"
                                            class="btn btn-sm btn-danger delete-btn">
                                            <span class="ion-trash-a" aria-hidden="true"></span>
                                        </button>
                                        <form method="post" id="deleteForm{{ $order->id }}"
                                            action="{{ route('user.order.destroy', $order->id) }}">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    @endif

                                    @if ($order->status == 'finished')
                                        @if (!$order->productRating)
                                        <form action="{{ route('user.order.rate-product', $order->id) }}" method="post"
                                            class="d-inline-flex align-items-center">
                                            @csrf
                                            <div class="rating-input">
                                                @for ($i = 0; $i < 10; $i++)
                                                <label for="r{{ $i + 1 }}" class="check">
                                                    <input type="checkbox" name="score" id="r{{ $i + 1 }}" 
                                                    value="{{ $i + 1 }}" />
                                                    <i class="em em-weary"></i>
                                                </label>
                                                @endfor
                                            </div>
                                        </form>
                                        @else {{-- jika udah order --}}
                                            @for ($i = 0; $i < $order->productRating->score; $i++)
                                                <i class="ion ion-ios-star" style="color: rgb(233, 142, 39)"></i>
                                            @endfor
                                            @for ($i = 0; $i < (10 - $order->productRating->score); $i++)
                                            <i class="ion ion-ios-star"></i>
                                            @endfor
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <p class="text-center">Tidak ada order untuk ditampilkan</p>
                        @endforelse
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
                title: 'Apa anda yakin ingin menghapus order ini?',
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
