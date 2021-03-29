@extends('layouts.admin')
@section('header')
    Detail Merchandise
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.merchandise-category.update', $category->id) }}">
                @method('PUT')
                @csrf
                    <div class="img-detail">
                        <img alt="image" src="{{ $category->image ? Storage::url($category->image) : 'https://via.placeholder.com/200' }}">
                    </div>
                    <div class="form-group">
                        <label>Category Image</label>
                        <input type="file" class="form-control" name="image" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Category ID</label>
                        <h6>{{ $category->id }}</h6>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input value="{{ $category->name }}" type="text" class="form-control" name="name" tabindex="1" required>
                    </div>
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
