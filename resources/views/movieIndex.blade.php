@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align:center; text-decoration: underline">Movie List</h1>

        <table class="Movie_table" align="center">
            <thead>
            <tr>
                <th style="text-align:center;">Movie's Title</th>
                <th style="text-align:center;">Description</th>
                <th style="text-align:center;">Button Bar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Movie as $Movies)

                <tr>
                    <td>{{ $Movies['title'] }}</td>
                    <td style="text-align:center;">{{ $Movies['description'] }}</td>
                    <td><a href="{{route('movie.edit', $Movies['id'])}}" id="MovieEditButton" name="MovieEditButton" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form method="POST" action="{{route('movie.destroy', $Movies['id'])}}">
                            @csrf
                            <fieldset>
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="deleteButton"></label>
                                    <div class="col-md-4">
                                        <button id="submitDeleteButton" name="submitDeleteButton" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection