@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- user name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input value="{{ $user->address }}" name="address" type="text" class="form-control" id="address">
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone_number">phone_number</label>
            <input value="{{ $user->phone_number }}" name="phone_number" type="text" class="form-control" id="phone_number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="username">username</label>
            <input value="{{ $user->username }}" name="username" type="text" class="form-control" id="username">
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="role">Role</label>
            {{ Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control', 'id' => 'role']) }}
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection