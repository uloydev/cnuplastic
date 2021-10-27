@extends('layouts.seller')

@section('header')
    Detail Product
@endsection


@section('content')
    <div class="card">
        <div class="card-primary">
            <form enctype="multipart/form-data" method="post" action="{{ route('seller.product.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="img-detail">
                        <img alt="image"
                            src="{{ $product->image ? Storage::url($product->image) : 'http://via.placeholder.com/200' }}">
                    </div>
                    <div class="form-group">
                        <label>Product Images</label>
                        <input type="file" class="form-control" name="image" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input value="{{ $product->name }}" type="text" class="form-control" name="name" tabindex="1"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input value="{{ $product->price }}" type="text" class="form-control" name="price" tabindex="1"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="product_category_id" class="form-control">
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $product->product_category_id) selected @endif>{{ $category->name }}</option>
                            @endforeach>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="summernote-simple">{{ $product->description }}</textarea>
                    </div>
                    <h5>Product Links</h5>
                    <div class="form-group">
                        <label>Link Shopee</label>
                        <input value="{{ $product->link_shopee }}" type="text" class="form-control" name="link_shopee" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Tokopedia</label>
                        <input value="{{ $product->link_tokopedia }}" type="text" class="form-control" name="link_tokopedia" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Bukalapak</label>
                        <input value="{{ $product->link_bukalapak }}" type="text" class="form-control" name="link_bukalapak" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Lazada</label>
                        <input value="{{ $product->link_lazada }}" type="text" class="form-control" name="link_lazada" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Link Instagram</label>
                        <input value="{{ $product->link_instagram }}" type="text" class="form-control" name="link_instagram" tabindex="1">
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
