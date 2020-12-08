@extends('layouts.app')

@section('content')
<a href="{{ route ('authors.create') }}" class="btn btn-primary mt-4">Add</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th>Actions</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($authors->items() as $author)
  <tr>
  <td>{{ $author->id}}</td>
  <td>{{ $author->first_name}}</td>
  <td>{{ $author->last_name}}</td>
  <td>
  <a class="btn btn-outline-primary" href="{{ route('authors.show', ['author' => $author->id]) }}">Details</a>
  <a class="btn btn-outline-primary" href="{{ route('authors.edit', ['author' => $author->id]) }}">Edit</a>
  </td>
  </tr>
  
@endforeach
  </tbody>
</table>
@endsection