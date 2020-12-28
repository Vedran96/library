@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">Review detail</h3>
<ul class="list-unstyled">
<li>user comment: {{ $review->user_comment}} </li>
<li>user rating: {{ $review->user_rating}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
</div>
@endsection