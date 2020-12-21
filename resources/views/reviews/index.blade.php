@extends('layouts.app')

@section('content')
<a href="{{ route ('reviews.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">user comment</th>
      <th scope="col">user rating</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($reviews->items() as $review)
  <tr>
  <td>{{ $review->id}}</td>
  <td>{{ $review->user_comment}}</td>
  <td>{{ $review->user_rating}}</td>
  <td>
  <a class="btn btn-outline-primary" href="{{ route('reviews.show', ['review' => $review->id]) }}">Details</a>
  <a class="btn btn-outline-primary" href="{{ route('reviews.edit', ['review' => $review->id]) }}">Edit</a>
  </td>
  </tr>
@endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $reviews->links() }}
  </div>
@endsection