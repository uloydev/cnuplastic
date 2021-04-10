@extends('layouts.admin')
@section('header')
    Data Request Promotion
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <span>Tabel Request Promotion</span>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Seller Name</th>
                            <th>Category</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promotions as $promotion)
                        <tr>
                            <td>{{ $promotion->id }}</td>
                            <td>{{ $promotion->product->name }}</td>
                            <td>{{ $promotion->user->name }}</td>
                            <td>{{ $promotion->product->productCategory->name }}</td>
                            <td>{{ $promotion->user->whatsapp }}</td>
                            <td>
                                @switch($promotion->status)
                                    @case('requested')
                                        <div class='badge badge-info font-bold'>Requested</div>
                                        @break
                                    @case('accepted')
                                        <div class='badge badge-success font-bold'>Accepted</div>
                                        @break
                                    @case('rejected')
                                        <div class='badge badge-danger font-bold'>Rejected</div>
                                        @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('admin.promotion.show', $promotion->id) }}" class="btn btn-sm btn-oranye">
                                    <span class="ion-search" aria-hidden="true">&nbsp; Detail</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


