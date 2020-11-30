@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">role name</th>
      
    
    </tr>
  </thead>
  <tbody>
  @foreach ($roles as $role)
  <tr>
  <td>{{ $role->id}}</td>
  <td>{{ $role->role_name}}</td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection