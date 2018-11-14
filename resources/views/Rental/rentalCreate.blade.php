@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('rental.store') }}" class="form-horizontal">
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>Create A New Rental </legend>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="Movie_Title">Selected Movie</label>
                    <div class="col-md-4">
                        @foreach($movies as $movie)
                            <input id="Movie_Title" name="Movie_Title" type="text" class="form-control input-md" readonly value="{{ $movie['title'] }}">
                        @endforeach
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="disk_ID">Select Desired Movie </label>
                    <div class="col-md-4">
                        <select id="disk_ID" name="disk_ID" class="form-control">
                            @foreach($kiosks as $kiosk)
                                @foreach($disks as $disk )
                                    @if($disk['Kiosk_ID'] == $kiosk['id'])
                                        <option value="{{ $disk['id'] }}">{{ $kiosk['location'] }}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="customer_ID">Customer Name </label>
                    <div class="col-md-4">
                        <select id="customer_ID" name="customer_ID" class="form-control">
                            @foreach($customers as $customer )
                                <option value="{{ $customer['id'] }}">{{ $customer['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <div class="col-md-4">
                        @foreach($movies as $movie)
                            <input id="movie_ID" name="movie_ID" type="text" class="form-control input-md" value="{{ $movie['id'] }}" hidden>
                        @endforeach
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                        <a href="{{route('rental.index')}}" id="diskCancelButton" name="diskCancelButton" class="btn btn-danger">Cancel</a>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

@endsection