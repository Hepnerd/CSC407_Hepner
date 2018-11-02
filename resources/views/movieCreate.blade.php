@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('movie.store')}}">
    <fieldset>
        @csrf
        <div class="container col-xs-12">
        <!-- Form Name -->
        <legend>Create A New Movie </legend>

        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="title">Movie Title</label>
            <div class="col-md-4">
                <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
                @if($errors->has('title'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('title') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="length">Movie Length</label>
            <div class="col-md-4">
                <input id="length" name="length" type="text" placeholder="" class="form-control input-md" >
                @if($errors->has('length'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('length') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="description">Movie Description</label>
            <div class="col-md-6">
                <input id="description" name="description" type="text" placeholder="" class="form-control input-md" >
                @if($errors->has('description'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('description') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="blueRayDVDCheckBoxes">DVD Type</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="onDVD">
                        <input type="checkbox" name="onDVD" id="onDVD" value="1">
                        DVD
                    </label>
                </div>
                <div class="checkbox">
                    <label for="onBlueRay">
                        <input type="checkbox" name="onBlueRay" id="onBlueRay" value="1">
                        BlueRay
                    </label>
                </div>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="coverPhoto">Movie Cover Photo</label>
            <div class="col-md-4">
                <input id="coverPhoto" name="coverPhoto" class="input-file" type="file">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submitButton"></label>
            <div class="col-md-8">
                <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                <a href="{{route('movie.index')}}" id="movieCancelButton" name="movieCancelButton" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        </div>
    </fieldset>
</form>

    @endsection
