@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('lends.update', ['lend' => $lend->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="date_from">Date from </label>
            <input value="{{ $lends->date_from }}" name="date_from" type="text" class="form-control" id="date_from">
            @if ($errors->has('date_from'))
                <span class="text-danger">{{ $errors->first('date_from') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="date_to">Date to</label>
            <input value="{{ $lends->date_to }}" name="date_to" type="text" class="form-control" id="date_to">
            @if ($errors->has('date_to'))
                <span class="text-danger">{{ $errors->first('date_to') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('lends.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection