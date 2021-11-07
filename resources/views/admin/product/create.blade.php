@extends('layouts.admin')

@section('header')
    <a href="{{ route('admin.product.index') }}" class="mr-2">
        <i class="ion ion-android-arrow-back"></i>
    </a>
    Tambah Product
@endsection


@section('content')
    <div class="card">
        <div class="card-primary">
            <form enctype="multipart/form-data" method="post" action="{{ route('admin.product.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="name" tabindex="1" required 
                        value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" tabindex="1"  value="{{ old('price') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="product_category_id" class="form-control">
                            <option disabled selected>Choose</option>
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="summernote-simple">{{ old('name') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Images</label>
                        <input type="file" class="form-control" name="image" tabindex="1" required>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                            <b>SAVE</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
