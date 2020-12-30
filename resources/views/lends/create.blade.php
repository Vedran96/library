@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('lends.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        
        <div class="form-group">
            <label for="date_from">Date from</label>
            <input value="{{ @old('date_from') }}" name="date_from" type="text" class="form-control" id="date_from">
            @if ($errors->has('date_from'))
                <span class="text-danger">{{ $errors->first('date_from') }}</span>
            @endif
        </div>

       
        <div class="form-group">
            <label for="date_to">Date to</label>
            <input value="{{ @old('date_to') }}" name="date_to" type="text" class="form-control" id="date_to">
            @if ($errors->has('date_to'))
                <span class="text-danger">{{ $errors->first('date_to') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="book">Book</label>
            {{ Form::select('book_id', $books, null, ['class' => 'form-control', 'id' => 'lend']) }}
        </div>
        <div class="form-group">
            <label for="user">User</label>
            {{ Form::select('user_id', $users, null, ['class' => 'form-control', 'id' => 'lend']) }}
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('lends.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection
