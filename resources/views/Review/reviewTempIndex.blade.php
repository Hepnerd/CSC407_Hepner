@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">Your Current Reviews</h1>

    <table class="disk_table" align="center">
        <thead>
        <tr>
            <th style="text-align:center; padding-left: 45px;">Movie review Title</th>
            <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">review Location</th>
            <th style="text-align:center; padding-right: 45px;">Disk review Type</th>
            <th style="text-align:center; padding-right: 45px;">Customer ID</th>
            <th style="text-align:center; padding-right: 45px;">review Date</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($review as $review)

            @foreach($review['customers'] as $customer)
                <tr>
                  @foreach($movies as $movie)
                      @if($movie['id'] == $review['Movie_ID'])
                          <td style="text-align:center; padding-left: 45px;">{{$movie['title']}}</td>
                      @endif
                  @endforeach
                    @foreach($movies as $movie)
                        @if($movie['id'] == $review['Movie_ID'])
                            <td style="text-align:center; padding-left: 45px;">{{$movie['title']}}</td>
                        @endif
                    @endforeach

                    @foreach($kiosks as $kiosk)
                        @if($kiosk['id'] == $review['Kiosk_ID'])
                            <td style="text-align:center; padding-left: 45px; padding-right: 45px;">{{$kiosk['location']}}</td>
                        @endif
                    @endforeach
                    <td style="text-align:center; padding-right: 45px;">{{$review['Type']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$customer['name']}}</td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>

                    <td><a href="" id="reviewEditButton" name="reviewEditButton" class="btn btn-primary">Edit</a></td>
                    <td>

                        <form method="POST" action="">
                            @method('DELETE')
                            @csrf
                            <fieldset>
                                <!-- Button -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="deleteButton"></label>
                                        <div class="col-md-4">
                                            <button id="deleteButton" name="deleteButton" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </td>
                </tr>

            @endforeach
        @endforeach
        </tbody>
    </table>

@endsection
