@extends('layouts.admin')
@section('header')
    <a href="{{ route('admin.product.index') }}" class="mr-2">
        <i class="ion ion-android-arrow-back"></i>
    </a>
    <span>Detail Product</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <form class="card-body" method="POST" action="{{ route('admin.product.update', $product->id) }}">
                @csrf @method('PUT')
                <div class="img-detail">
                    <img alt="image"
                    src="{{ $product->image ? Storage::url($product->image) : 'http://via.placeholder.com/200' }}">
                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="name" tabindex="1" required 
                    value="{{ $product->name ?? old('name') }}">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" tabindex="1"  
                    value="{{ $product->price ?? old('price') }}" required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" class="form-control" name="stock" tabindex="1"  
                    value="{{ $product->stock ?? old('stock') }}" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="product_category_id" class="form-control">
                        <option disabled selected>Choose</option>
                        @foreach ($productCategories as $category)
                            <option value="{{ $category->id }}" @if($product->product_category_id == $category->id) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="summernote-simple">{{ $product->description ?? 
                    old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Product Images</label>
                    <input type="file" class="form-control" name="image" tabindex="1">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                        <b>SAVE</b>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
