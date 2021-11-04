@extends('layouts.admin')

@section('header')
Data Product
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <span>Tabel Category Product</span>
        <div class="float-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#add-category">
                Add new category
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm mr-4" data-toggle="modal" 
                            data-target="#edit-category-{{ $loop->iteration }}">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" 
                            data-target="#remove-category-{{ $loop->iteration }}">
                                Remove
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="add-category" tabindex="-1" aria-labelledby="add-categoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-categoryLabel">Add new category</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.category.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach ($categories as $category)
    <div class="modal fade" id="edit-category-{{ $loop->iteration }}" tabindex="-1" 
        aria-labelledby="edit-category-{{ $loop->iteration }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-category-{{ $loop->iteration }}Label">
                        Edit category <b>{{ $category->name }}</b>
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.category.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="edit-name" class="form-label">Category name</label>
                            <input type="text" class="form-control" id="edit-name" name="name"
                            value="{{ $category->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="remove-category-{{ $loop->iteration }}" tabindex="-1" 
        aria-labelledby="remove-category-{{ $loop->iteration }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="remove-category-{{ $loop->iteration }}Label">
                        Remove category <b>{{ $category->name }}</b>
                    </h5>
                </div>
                <div class="modal-body">
                    <p>
                        Are you sure wanna remove <b>{{ $category->name }}</b>?
                        This will remove all product with related category
                    </p>
                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block">Yes, remove</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection