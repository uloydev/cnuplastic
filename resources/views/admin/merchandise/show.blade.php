@extends('layouts.admin')
@section('header')
    Detail Merchandise
    @endsection
    
    @section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.merchandise.update', $merchandise->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="img-detail">
                        <img alt="image" src="{{ $merchandise->image ? Storage::url($merchandise->image) : 'https://via.placeholder.com/200' }}">
                    </div>
                    <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" class="form-control" name="image" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label>Product Kode</label>
                        <h6>{{ $merchandise->id }}</h6>
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input value="{{ $merchandise->name }}" type="text" class="form-control" name="name" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input value="{{ $merchandise->price }}" type="number" class="form-control" name="price" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Event Category</label>
                        <select name="merchandise_category_id" class="form-control">
                            @foreach ($merchandiseCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>WhatsApp Number</label>
                        <input value="{{ $merchandise->whatsapp }}" type="text" class="form-control" name="whatsapp" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="summernote-simple" required>{{ $merchandise->description }}</textarea>
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
