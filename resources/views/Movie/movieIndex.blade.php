@extends('layouts.app')

@section('content')
<div class="flex-container">

        @foreach($movie as $movies)
        <div class="flex-item">

                    <img class="movieCover" src="/images/movie_{{$movies['id']}}.jpg">
                    <table class="movieTable" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <th>{{$movies['title']}}</th>
                      </tr>
                      <tr>
                        <td>{{$movies['length']}}</td>
                      </tr>
                      <tr>
                        <td>{{$movies['description']}}</td>

                      </tr>
                    </table>


</div>

        @endforeach
</div>
@endsection
