@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('movie.store')}}" enctype="multipart/form-data">
    <fieldset>
        @csrf
        <div class="container col-xs-12">
        <!-- Form Name -->
        <legend style="text-align: center; text-decoration: underline; padding-bottom: 25px">Create A New Movie </legend>

        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="title" style="text-align: right">Movie Title</label>
            <div class="col-md-4">
                <input id="title" name="title" type="text" placeholder="" value="{{old('title')}}"class="form-control input-md">
                @if($errors->has('title'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('title') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="length" style="text-align: right">Movie Length</label>
            <div class="col-md-4">
                <input id="length" name="length" type="text" placeholder="" value="{{old('length')}}" class="form-control input-md" >
                @if($errors->has('length'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('length') }}</small>
                    </div>
                @endif
            </div>
        </div>

            <div class="form-group row">
                <label class="col-md-4 control-label" for="genreID" style="text-align: right">Genre Id </label>
                <div class="col-md-5">
                    <select id="genreID" name="genreID" class="form-control" value="{{old('genreID')}}">
                        <option value="">Please select ID #</option>
                        <option value="1">Action</option>
                        <option value="2">Comedy</option>
                        <option value="3">Horror</option>
                        <option value="4">Drama</option>
                        <option value="5">Romantic</option>
                        <option value="6">Documentary</option>
                        <option value="7">Western</option>
                        <option value="8">Fiction</option>
                        <option value="9">Animation</option>
                    </select>
                    @if($errors->has('genreID'))
                        <div>
                            <small id="passwordHelp" class="text-danger">{{ $errors->first('genreID') }}</small>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="description" style="text-align: right">Movie Description</label>
            <div class="col-md-6">
                <input id="description" name="description" type="text" placeholder="" value="{{old('description')}}" class="form-control input-md" >
                @if($errors->has('description'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('description') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="blueRayDVDCheckBoxes" style="text-align: right">DVD Type</label>
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
            <label class="col-md-4 control-label" for="coverPhoto" style="text-align: right">Movie Cover Photo</label>
            <div class="col-md-4">
                <input id="coverPhoto" name="coverPhoto" class="form-control here" type="file" value="{{old('coverPhoto')}}">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="submitButton"></label>
            <div class="col-md-8">
                <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                <a href="{{route('movie.manage')}}" id="movieCancelButton" name="movieCancelButton" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        </div>
    </fieldset>
</form>

    @endsection
