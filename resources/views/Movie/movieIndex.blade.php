@extends('layouts.app')

@section('content')
<div class="flex-container">

        @foreach($movie as $movies)
        <div class="flex-item">
                <div class="movieImageContainer">
                  <div class="movieImageHalf">
                    <img class="movieCover" src="/images/movie_{{$movies['id']}}.jpg">
                  </div>
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
                      <tr class="onDVD">
                        <td class="onDVDTD">Available on DVD/BluRay: : {{$movies['onDVD']}}</td>
                      </tr>
                      <tr class="onBluRay">
                        <td class="onBluRayTD">Available on DVD/BluRay: : {{$movies['onBlueRay']}}</td>
                      </tr>
                      <tr>
                        <td class="noRentalOptions"></td>
                      </tr>
                      <tr class="movieRentDVDTR">
                        <td class="movieRentDVDTD"><a href="/rental/create/{{ $movies['id'] }}/type/DVD" id="MovieRentDVD" name="MovieRentDVD" class="btn btn-success">Rent DVD</a></td>
                      </tr>
                      <tr class="bluRayRentTR">
                        <td class="bluRayRentTD"><a href="/rental/create/{{ $movies['id'] }}/type/BlueRay" id="MovieRentBluRay" name="MovieRentBluRay" class="btn btn-success">Rent BluRay</a></td>
                      </tr>
                    </table>
                  </div>
                  </div>


</div>

        @endforeach
</div>
@endsection
