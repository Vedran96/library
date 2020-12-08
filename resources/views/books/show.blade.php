@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">book detail</h3>
<ul class="list-unstyled">
<li>Title: {{ $book->title}} </li>
<li>Description: {{ $book->description}}</li>
<li>Date publication: {{ $book->date_publication}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
</div>
@endsection