@extends('layouts.app')

@section('content')
    @foreach($movie as $movies)
        <h1>{{ $movies['title'] }}</h1>
    @endforeach
@endsection