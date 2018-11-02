@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('movie.update', $Movie['id']) }}">
        @method('PUT')
        <fieldset>
            @csrf
            <div class="container col-xs-12">
                <!-- Form Name -->
                <legend style="text-align: center; text-decoration: underline; padding-bottom: 25px">Create A New Movie </legend>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="title" style="text-align: right">Movie Title</label>
                    <div class="col-md-4">
                        <input id="title" name="title" type="text" placeholder="" class="form-control input-md" value="{{ $Movie['title'] }}" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="length" style="text-align: right">Movie Length</label>
                    <div class="col-md-4">
                        <input id="length" name="length" type="text" placeholder="" class="form-control input-md" value="{{ $Movie['length'] }}"required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="description" style="text-align: right">Movie Description</label>
                    <div class="col-md-6">
                        <input id="description" name="description" type="text" placeholder="" class="form-control input-md" value="{{ $Movie['description'] }}"required="">

                    </div>
                </div>

                <!-- Multiple Checkboxes -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="blueRayDVDCheckBoxes" style="text-align: right">DVD Type</label>
                    <div class="col-md-4">
                        <div class="checkbox">
                            <label for="onDVD">
                                @if($Movie['onDVD'] == '1')
                                <input type="checkbox" checked name="onDVD" id="onDVD" value="{{ $Movie['onDVD'] }}">
                                    DVD
                                    @else
                                    <input type="checkbox" name="onDVD" id="onDVD" value="{{ $Movie['onDVD'] }}">
                                    DVD
                                    @endif
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="onBlueRay">
                                @if($Movie['onBlueRay'] == '1')
                                <input type="checkbox" checked name="onBlueRay" id="onBlueRay" value="{{ $Movie['onBlueRay'] }}">
                                BlueRay
                                    @else
                                    <input type="checkbox" name="onBlueRay" id="onBlueRay" value="{{ $Movie['onBlueRay'] }}">
                                    BlueRay
                                    @endif
                            </label>
                        </div>
                    </div>
                </div>

                <!-- File Button -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="coverPhoto" style="text-align: right">Movie Cover Photo</label>
                    <div class="col-md-4">
                        <input id="coverPhoto" name="coverPhoto" class="input-file" type="file" value="{{ $Movie['coverPhoto'] }}">
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                        <a href="{{route('movie.index')}}" id="MovieCancelButton" name="MovieCancelButton" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>

@endsection