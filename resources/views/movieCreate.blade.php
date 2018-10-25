@extends('layouts.app')

@section('content')
<div class="container col-xs-12">
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Create A New Movie </legend>

        <!-- Text input-->
        <div class="form-group col-xs-12">
            <label class="col-md-6 control-label" for="textinput">Movie Title</label>
            <div class="col-md-6">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Rating </label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="3.8 out of 5 stars" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lengthInputBox">Movie Length</label>
            <div class="col-md-4">
                <input id="lengthInputBox" name="lengthInputBox" type="text" placeholder="" class="form-control input-md" required="">
                <span class="help-block">help</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="descriptionInputBox">Movie Description</label>
            <div class="col-md-6">
                <input id="descriptionInputBox" name="descriptionInputBox" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="blueRayDVDCheckBoxes">DVD Type</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="blueRayDVDCheckBoxes-0">
                        <input type="checkbox" name="blueRayDVDCheckBoxes" id="blueRayDVDCheckBoxes-0" value="1">
                        DVD
                    </label>
                </div>
                <div class="checkbox">
                    <label for="blueRayDVDCheckBoxes-1">
                        <input type="checkbox" name="blueRayDVDCheckBoxes" id="blueRayDVDCheckBoxes-1" value="2">
                        BlueRay
                    </label>
                </div>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="movieImageButton">Movie Cover Photo</label>
            <div class="col-md-4">
                <input id="movieImageButton" name="movieImageButton" class="input-file" type="file">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submitButton"></label>
            <div class="col-md-8">
                <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                <button id="cancelButton" name="cancelButton" class="btn btn-danger">Cancel</button>
            </div>
        </div>

    </fieldset>
</form>
</div>
    @endsection