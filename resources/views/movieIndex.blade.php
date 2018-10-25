@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($movie as $movies)
  <div class="row">
        <div class="col-sm">
    <img class="movieCover" style="padding-bottom: 20px;" src={{ $movies['coverPhoto'] }}></div>
        <div class="col-sm">
        <h1>Title: {{ $movies['title'] }}</h1>
        <h1>Rating: {{ $movies['rating'] }}</h1>
        <h1>Length: {{ $movies['length'] }} Minutes</h1>
        <h1>Description: {{ $movies['description'] }}</h1>
        <h1>On DVD: {{ $movies['onDVD'] }}</h1>
        <h1>On Blue Ray: {{ $movies['onBlueRay'] }}</h1>
      </div>
    </div>
    @endforeach
  </div>
@endsection
