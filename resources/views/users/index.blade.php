@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">phone_number</th>
      <th scope="col">username</th>
      <th scope="col">role</th>
      <th>Actions</th>
      
    
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
  <tr>
  <td>{{ $user->id}}</td>
  <td>{{ $user->name}}</td>
  <td>{{ $user->address}}</td>
  <td>{{ $user->phone_number}}</td>
  <td>{{ $user->username}}</td>
  <td>{{ $user->role->role_name}}</td>

  
  <td>
  <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
  <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
  <a class="btn btn-outline-primary" href="{{ route('change_password.edit', ['user' => $user->id]) }}">Change password</a>
  
  </td>
  </tr>
@endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
        {{ $users->links() }}
  </div>
@endsection