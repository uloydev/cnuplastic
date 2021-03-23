@extends('layouts.admin')
@section('header')
    Data Kategori Merchandise
@endsection

@section('content')
    <a href="{{ route('admin.merchandise-category.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
        <i class="ion ion-plus-round" style="margin-right: 10px"></i>
        Add Merchandise Category
    </a>
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <h4>Tabel Data Kategori Merchandise</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>merchandise Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->merchandises->count() }}</td>
                                <td>
                                    <a href="{{ route('admin.merchandise-category.show', $category->id) }}"
                                        class="btn btn-sm btn-oranye m-2">
                                        <span class="ion-search" aria-hidden="true">&nbsp; Detail</span>
                                    </a>
                                    <form method="post" id="deleteForm{{ $category->id }}"
                                        action="{{ route('admin.merchandise-category.destroy', $category->id) }}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <button type="submit" form="deleteForm{{ $category->id }}"
                                        class="btn btn-sm btn-danger m-2">
                                        <span class="ion-trash-a" aria-hidden="true">Delete</span>
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
