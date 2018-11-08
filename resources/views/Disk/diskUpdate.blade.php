@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('disk.update', $disk['id']) }}" class="form-horizontal">
            @method('PUT')
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>Create A New Disk </legend>

                <!-- Select Basic -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="movie_ID">Select Movie ID </label>
                    <div class="col-md-4">
                        <select id="movie_ID" name="movie_ID" class="form-control">
                            @foreach($Movie as $movies )
                                @if($movies['id'] == $disk['Movie_ID'])
                                    <option value = {{ $movies['id'] }} selected> {{$movies['title']}}</option>
                                @else
                                    <option value = {{ $movies['id'] }} > {{$movies['title']}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="type">Select Disk Type </label>
                    <div class="col-md-4">
                        <select id="type" name="type" class="form-control">
                            <option value="DVD">DVD</option>
                            <option value="BlueRay">BlueRay</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="kiosk_ID">Select Kiosk ID </label>
                    <div class="col-md-4">
                        <select id="kiosk_ID" name="kiosk_ID" class="form-control">
                            @foreach($Kiosk as $kiosks )
                                @if($disk['Kiosk_ID'] == $kiosks['id'] )
                                    <option value = {{ $kiosks['id'] }} selected> {{$kiosks['location']}}</option>
                                @else
                                    <option value = {{ $kiosks['id'] }}> {{ $kiosks['location'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                        <a href="{{route('disk.index')}}" id="diskCancelButton" name="diskCancelButton" class="btn btn-danger">Cancel</a>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

@endsection