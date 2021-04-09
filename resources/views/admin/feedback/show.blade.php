@extends('layouts.admin')
@section('header')
    Detail Product
@endsection

@section('content')
    <div class="card">
        <div class="card-primary">
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <h6>{{ $feedback->name }}</h6>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <h6>{{ $feedback->email }}</h6>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <h6>{{ $feedback->phone }}</h6>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <p class="mr-5">
                        {{ $feedback->message }}
                    </p>
                </div>
                @if ($feedback->answer)
                    <div class="form-group">
                        <label>Answer</label>
                        <p class="mr-5">{{ $feedback->answer }}</p>
                    </div>
                @else
                    <form action="{{ route('admin.feedback.update', $feedback->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="form-control" name="answer"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-oranye" tabindex="1">
                                <b>SAVE</b>
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
