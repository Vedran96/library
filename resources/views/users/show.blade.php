@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
<h1>{{$user->name}}</h1>

<img src="https://picsum.photos/seed/picsum/300/300" alt="user image" class="d-block mx-auto rounded-circle">
<h3 class="mt-3">User detail</h3>

<div class="btn-group mt-5" role="group">
        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>

        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
        <a class="btn btn-primary" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>

        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deactivate</button>
        </form>
    </div>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
</div>
@endsection