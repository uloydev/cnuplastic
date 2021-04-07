@extends('layouts.seller')

@section('header')
    Data Request Promotion
@endsection


@section('content')
    <a href="{{ route('seller.promotion.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
        <i class="ion ion-plus-round" style="margin-right: 10px"></i>
        Request Another Promotion
    </a>
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <h4>Tabel Request Promotion</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Requested At</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($promotions as $promotion)
                            <tr>
                                <td>{{ $promotion->id }}</td>
                                <td>{{ $promotion->product->name }}</td>
                                <td>{{ $promotion->created_at }}</td>
                                <td>
                                    @switch($promotion->status)
                                        @case('requested')
                                        <div class='badge badge-info'>Requested</div>
                                        @break
                                        @case('accepted')
                                        <div class='badge badge-success'>Accepted</div>
                                        @break
                                        @case('rejected')
                                        <div class='badge badge-danger'>Rejected</div>
                                        @break
                                        @default
                                    @endswitch
                                </td>
                                <td>
                                    <form method="post" id="deleteForm{{ $promotion->id }}"
                                        action="{{ route('seller.promotion.destroy', $promotion->id) }}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <a href="{{ route('seller.promotion.show', $promotion->id) }}" name="detail" class="btn btn-sm btn-oranye btn-move">
                                        <span class="ion-search" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" form="deleteForm{{ $promotion->id }}"
                                        class="btn btn-sm btn-danger m-2">
                                        <span class="ion-trash-a" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center">Tidak ada data untuk ditampilkan</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
