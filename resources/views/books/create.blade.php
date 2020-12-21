@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('books.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        
        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ @old('title') }}" name="title" type="text" class="form-control" id="title">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>

       
        <div class="form-group">
            <label for="description">Description</label>
            <input value="{{ @old('description') }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="date_publication">Date publication</label>
            <input value="{{ @old('date_publication') }}" name="date_publication" type="text" class="form-control" id="date_publication">
            @if ($errors->has('date_publication'))
                <span class="text-danger">{{ $errors->first('date_publication') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('books.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection
