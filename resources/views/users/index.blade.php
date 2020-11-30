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
      <th scope="col">password</th>

      
    
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
  </tr>
@endforeach
  </tbody>
</table>
@endsection