@extends('layouts.app')

@section('content')
<div>
<form>
<h3 class="mt-3">book detail</h3>
<ul class="list-unstyled">
<li>Title: {{ $book->title}} </li>
<li>Description: {{ $book->description}}</li>
<li>Date publication: {{ $book->date_publication}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>


<form class="form-inline" action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST">
<!-- CSRF token -->
@csrf
    @method('DELETE')
    <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection