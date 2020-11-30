@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach ($authors->items() as $author)
  <tr>
  <td>{{ $author->id}}</td>
  <td>{{ $author->first_name}}</td>
  <td>{{ $author->last_name}}</td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection