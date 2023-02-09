@extends('base')
@section("content")
    <h5 class="text-danger">{{ $exception->getMessage() }}</h5>
    <a href="/">Back to Home</a>
@endsection
