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
                    </div><br>
                    <h5>Product Links</h5>
                    <div class="form-group">
                        <label>Link Shopee</label>
                        <input value="{{ old('link_shopee') }}" type="text" class="form-control" name="link_shopee" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Tokopedia</label>
                        <input value="{{ old('link_tokopedia') }}" type="text" class="form-control" name="link_tokopedia" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Bukalapak</label>
                        <input value="{{ old('link_bukalapak') }}" type="text" class="form-control" name="link_bukalapak" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Lazada</label>
                        <input value="{{ old('link_lazada') }}" type="text" class="form-control" name="link_lazada" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Instagram</label>
                        <input value="{{ old('link_instagram') }}" type="text" class="form-control" name="link_instagram" tabindex="1">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                            <b>SAVE</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
