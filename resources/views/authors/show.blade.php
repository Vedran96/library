@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">Author detail</h3>
<ul class="list-unstyled">
<li>first name: {{ $author->first_name}} </li>
<li>last name: {{ $author->last_name}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>


<form class="form-inline" action="{{ route('authors.destroy', ['author' => $author->id]) }}" method="POST">
<!-- CSRF token -->
@csrf
    @method('DELETE')
    <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection