@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('authors.update', ['author' => $author->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="first_name">First name </label>
            <input value="{{ $authors->first_name }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input value="{{ $authors->last_name}}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('authors.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection