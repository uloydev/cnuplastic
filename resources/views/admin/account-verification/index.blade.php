@extends('layouts.admin')
@section('header')
    Acoount Verification
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <span>Tabel Data Account Verification</span>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Seller Name</th>
                            <th>Profession</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $seller)
                            <tr>
                                <td>{{ $seller->identity_id }}</td>
                                <td>{{ $seller->name }}</td>
                                <td>{{ $seller->profession }}</td>
                                <td>
                                    <a href="{{ route('admin.account-verification.show', $seller->id) }}" class="btn btn-sm btn-oranye">
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


