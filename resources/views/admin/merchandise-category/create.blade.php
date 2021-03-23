@extends('layouts.admin')
@section('header')
    Tambah Merchandise
@endsection

@section('content')
    <a href="{{ route('admin.merchandise.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
        <i class="ion ion-plus-round" style="margin-right: 10px"></i>
        Add Merchandise
    </a>
    <div class="card">
        <div class="card-header">
            <h4>Form Add Merchandise Category</h4>
        </div>
        <div class="card-primary">
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.merchandise-category.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Category Logo</label>
                        <input type="file" class="form-control" name="image" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="name" placeholder="e.g Patribera" tabindex="1" required>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                            <b>SAVE</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
