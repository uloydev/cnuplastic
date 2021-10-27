@extends('layouts.seller')

@section('header')
    Request Poduct Promotion
@endsection


@section('content')
    <div class="card">
        <div class="card-primary">
            <form method="post" action="{{ route('seller.promotion.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Select Product</label>
                        <select name="product_id" class="form-control">
                            <option disabled selected>Choose</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                            <b>SUBMIT</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
