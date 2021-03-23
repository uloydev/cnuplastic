@extends('layouts.admin')
@section('header')
    Data Request Promotion
@endsection

@section('content')
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
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Seller Name</th>
                            <th>Category</th>
                            <th>Phone Number</th>
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


