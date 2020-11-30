@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">user comment</th>
      <th scope="col">user rating</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach ($reviews->items() as $review)
  <tr>
  <td>{{ $review->id}}</td>
  <td>{{ $review->user_comment}}</td>
  <td>{{ $review->user_rating}}</td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection