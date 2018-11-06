@extends('layouts.app')

@section('content')
<div class="flex-container">

        @foreach($movie as $movies)
        <div class="flex-item">

                    <img class="movieCover" style="padding-bottom: 20px;" src="/images/movie_{{$movies['id']}}.jpg">



</div>

        @endforeach
</div>
@endsection
