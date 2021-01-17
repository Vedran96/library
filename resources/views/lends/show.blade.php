@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">book detail</h3>
<ul class="list-unstyled">
<li>Date from: {{ $lend->date_from}} </li>
<li>Date to: {{ $lend->date_to}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
<form class="form-inline" action="{{ route('lends.destroy', ['lend' => $lend->id]) }}" method="POST">
<!-- CSRF token -->
@csrf
    @method('DELETE')
    <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection