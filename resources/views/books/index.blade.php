
@extends('layouts.app')

@section('content')
<a href="{{ route ('books.create') }}" class="btn btn-primary mt-4">Add</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Book title</th>
      <th scope="col">Book description</th>
      <th scope="col">Book publication</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($books->items() as $book)
  <tr>
  <td>{{ $book->id}}</td>
  <td>{{ $book->title}}</td>
  <td>{{ $book->description}}</td>
  <td>{{ $book->date_publication}}</td>
  <td>
  <a class="btn btn-outline-primary" href="{{ route('books.show', ['book' => $book->id]) }}">Details</a>
  <a class="btn btn-outline-primary" href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a>
  </td>
@endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $books->links() }}
  </div>
@endsection