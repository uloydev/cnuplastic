@extends('layouts.admin')
@section('header')
    Data Seller
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <span>Tabel Data Seller</span>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Seller Name</th>
                            <th>Profession</th>
                            <th>Faculty</th>
                            <th>Verification Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $seller)
                            <tr>
                                <td>{{ $seller->identity_id }}</td>
                                <td>{{ $seller->name }}</td>
                                <td>{{ $seller->profession }}</td>
                                <td>{{ $seller->faculty }}</td>
                                <td>
                                    @switch($seller->verification_status)
                                        @case('not_verified')
                                        <div class='badge badge-danger'>Not Verified</div>
                                        @break
                                        @case('verified')
                                        <div class='badge badge-success'>Verified</div>
                                        @break
                                        @case('requested')
                                        <div class='badge badge-info'>Requested</div>
                                        @break
                                        @case('rejected')
                                        <div class='badge badge-danger'>Rejected</div>
                                        @break
                                        @default
                                    @endswitch
                                </td>
                                <td>
                                    <a href="{{ route('admin.seller.show', $seller->id) }}" class="btn btn-sm btn-oranye">
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
