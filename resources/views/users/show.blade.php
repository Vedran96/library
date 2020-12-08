@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">User detail</h3>
<ul class="list-unstyled">
<li>Name: {{ $user->name} </li>
<li>Address: {{ $user->address}}</li>
<li>Phone number: {{ $user->phone_number}}</li>
<li>Username: {{ $user->username}}</li>
<li>Password: {{ $user->password}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
</div>
@endsection