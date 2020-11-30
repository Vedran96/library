@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">date_from</th>
      <th scope="col">date_to</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach ($lends->items() as $lend)
  <tr>
  <td>{{ $lend->id}}</td>
  <td>{{ $lend->date_from}}</td>
  <td>{{ $lend->date_to}}</td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection
