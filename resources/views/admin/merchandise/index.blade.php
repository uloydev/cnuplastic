@extends('layouts.admin')
@section('header')
    Data Merchandise
@endsection

@section('content')
    <a href="{{ route('admin.merchandise.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
        <i class="ion ion-plus-round" style="margin-right: 10px"></i>
        Add Merchandise
    </a>
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <h4>Tabel Data Merchandise</h4>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>CODE</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Event Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($merchandises as $merchandise)
                            <tr>
                                <td>{{ $merchandise->id }}</td>
                                <td>{{ $merchandise->name }}</td>
                                <td>Rp. {{ $merchandise->price }}</td>
                                <td>{{ $merchandise->merchandiseCategory->name }}</td>
                                <td>
                                    <form method="post" id="deleteForm{{ $merchandise->id }}" action="{{ route('admin.merchandise.destroy', $merchandise->id) }}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <a href="{{ route('admin.merchandise.show', $merchandise->id) }}" class="btn btn-sm btn-oranye m-2">
                                        <span class="ion-search" aria-hidden="true">&nbsp;</span>
                                    </a>
                                    <button type="submit" form="deleteForm{{ $merchandise->id }}" class="btn btn-sm btn-danger m-2">
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


