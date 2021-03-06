@extends('layouts.app')

@section('content')
<div class="container">
  <legend class="updateLegend">Movie List</legend>

    <table class="Movie_table" align="center">
        <thead>
        <tr>
            <th>Movie's Title</th>
            <th>Description</th>
            <th>Genre Type</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Movie as $Movies)

        <tr>
            <td>{{ $Movies['title'] }}</td>
            <td style="text-align:center; padding-right: 45px; padding-left: 45px;">{{ $Movies['description'] }}</td>

            @foreach($Genres as $Genre)
                @if($Genre['id'] == $Movies['genreID'])
                    <td style="text-align: center; padding-right: 45px;">{{ $Genre['name'] }}</td>
                @endif
            @endforeach

            <td><a href="{{route('movie.create')}}" id="MovieAddButton" name="MovieAddButton" class="btn btn-success">Add</a></td>
            <td><a href="{{route('movie.edit', $Movies['id'])}}" id="MovieEditButton" name="MovieEditButton" class="btn btn-primary">Edit</a></td>

            <td>
                <form method="POST" action="{{route('movie.destroy', $Movies['id'])}}">
                    @method('DELETE')
                    @csrf
                  <!--  <fieldset>
                        <!-- Button
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="deleteButton"></label>
                            <div class="col-md-4">
                                <button id="submitDeleteButton" name="submitDeleteButton" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </fieldset> -->
                    <td><a id="submitDeleteButton" name="submitDeleteButton" class="btn btn-danger">Delete</a></td>

                </form>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>
@endsection
