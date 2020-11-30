
@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Book title</th>
      <th scope="col">Book description</th>
      <th scope="col">Book publication</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($books->items() as $book)
  <tr>
  <td>{{ $book->id}}</td>
  <td>{{ $book->title}}</td>
  <td>{{ $book->description}}</td>
  <td>{{ $book->date_publication}}</td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection