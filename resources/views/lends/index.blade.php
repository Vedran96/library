@extends('layouts.app')

@section('content')
<a href="{{ route ('lends.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">date_from</th>
      <th scope="col">date_to</th>
      <th>Actions</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach ($lends->items() as $lend)
  <tr>
  <td>{{ $lend->id}}</td>
  <td>{{ $lend->date_from}}</td>
  <td>{{ $lend->date_to}}</td>
  <td>
  <a class="btn btn-outline-primary" href="{{ route('lends.show', ['lend' => $lend->id]) }}">Details</a>
  <a class="btn btn-outline-primary" href="{{ route('lends.edit', ['lend' => $lend->id]) }}">Edit</a>
  </td>
  </tr>
@endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $lends->links() }}
  </div>
@endsection
