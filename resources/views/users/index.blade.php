@extends('layouts.app')

@section('content')
<a href="{{ route ('users.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">phone_number</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
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
  <td>{{ $user->password}}</td>
  <td>
  <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
  <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
  </td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection