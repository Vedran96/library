@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('reviews.update', ['review' => $review->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="user_comment ">User comment </label>
            <input value="{{ $review->user_comment }}" name="user_comment " type="text" class="form-control" id="user_comment ">
            @if ($errors->has('user_comment '))
                <span class="text-danger">{{ $errors->first('user_comment ') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="user_rating">User rating</label>
            <input value="{{ $review->user_rating }}" name="user_rating" type="text" class="form-control" id="user_rating">
            @if ($errors->has('user_rating'))
                <span class="text-danger">{{ $errors->first('user_rating') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="book">Book</label>
            {{ Form::select('book_id', $books, $review->book_id, ['class' => 'form-control', 'id' => 'book']) }}
        </div>
        <div class="form-group">
            <label for="user">User</label>
            {{ Form::select('user_id', $users, $review->user_id, ['class' => 'form-control', 'id' => 'user']) }}
        </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection