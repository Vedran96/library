@extends('layouts.app')

@section('content')
<a href="{{ route ('authors.create') }}" class="btn btn-primary mt-4">Add</a>

<!-- Search form -->
<form class="form-inline float-right mt-5" method="GET" action="{{ route('authors.index') }}">
    <input class="form-control" type="text" placeholder="Search" name="search">
  </form>

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

<div class="d-flex justify-content-center">
    {{ $authors->links() }}
  </div>
@endsection