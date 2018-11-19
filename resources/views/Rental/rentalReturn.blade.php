@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('rental.update', $rental['id']) }}">
    @method('PUT')
    @csrf
    <fieldset>

        <!-- Form Name -->
        <legend>Return Your Rental</legend>

        <!-- Select Basic -->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="Kiosk_ID">Return Location </label>
            <div class="col-md-4">
                <select id="Kiosk_ID" name="Kiosk_ID" class="form-control">
                    @foreach($kiosks as $kiosk)
                    <option value="{{$kiosk['id']}}"> {{ $kiosk['location'] }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 control-label" for="submitButton"></label>
            <div class="col-md-8">
                <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                <a href="{{route('rental.index')}}" id="diskCancelButton" name="diskCancelButton" class="btn btn-danger">Cancel</a>
            </div>
        </div>

    </fieldset>
</form>
    @endsection
