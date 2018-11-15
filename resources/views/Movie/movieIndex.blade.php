@extends('layouts.app')

@section('content')
<div class="flex-container">

        @foreach($movie as $movies)
        <div class="flex-item">
                <div class="movieImageContainer">
                  <div class="movieImageHalf">
                    <img class="movieCover" src="/images/movie_{{$movies['id']}}.jpg">
                  </div class="movieImageHalf">
                  <div class="movieTableHalf">
                    <button style="display:none;" type="button" class="close Movieclose" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <table class="movieTable" cellpadding="0" cellspacing="0" border="0">
                        <th>{{$movies['title']}}</th>
                      <tr>
                        <td>Length: {{$movies['length']}} minutes</td>
                      </tr>
                      <tr>
                        <td>Description: {{$movies['description']}}</td>
                      </tr>
                      <tr>
                        <td><a href="/rental/create/{{ $movies['id'] }}" id="MovieAddButton" name="MovieAddButton" class="btn btn-success">Rent</a></td>
                      </tr>
                    </table>
                  </div>
                  </div>


</div>

        @endforeach
</div>
@endsection
