@extends('layouts.admin')
@section('header')
    Tambah Merchandise
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Form Add Merchandise</h4>
        </div>
        <div class="card-primary">
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.merchandise.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Product Name</label>
                        <input value="{{ old('name') }}" type="text" class="form-control" name="name" tabindex="1"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input value="{{ old('price') }}" type="number" class="form-control" name="price" tabindex="1"
                            required>
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
                        <input value="{{ old('whatsapp') }}" type="text" class="form-control" name="whatsapp" tabindex="1"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="summernote-simple"
                            required>{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" class="form-control" name="image" tabindex="1" value="{{ old('image') }}">
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
