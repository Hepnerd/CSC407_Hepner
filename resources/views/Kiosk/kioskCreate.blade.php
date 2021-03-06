@extends('layouts.app')

@section('content')

<div class="container">

        <form method="POST" action="{{route('kiosk.store')}}">
            @csrf
            <fieldset>
                <!-- Form Name -->
                <legend style="text-align: center; text-decoration: underline; padding-bottom: 25px">Add A New Kiosk </legend>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="location" style="text-align: right">Kiosk Location</label>
                    <div class="col-md-4">
                        <input id="location" name="location" type="text" placeholder="beside the Denny's" class="form-control input-md" value="{{old('location')}}">
                        @if($errors->has('location'))
                            <div>
                                <small id="passwordHelp" class="text-danger">{{ $errors->first('location') }}</small>
                            </div>
                        @endif
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group row  text-right">
                    <label class="col-md-4 control-label" for="address" style="text-align: right">Kiosk Address</label>
                    <div class="col-md-4">
                        <input id="address" name="address" type="text" placeholder="23151 Oak Lane " class="form-control input-md" value="{{old('address')}}">
                        @if($errors->has('address'))
                            <div>
                                <small id="passwordHelp" class="text-danger">{{ $errors->first('address') }}</small>
                            </div>
                        @endif
                    </div>
                </div>


                <!-- Button (Double) -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="kioskSubmitButton"></label>
                    <div class="col-md-8">
                        <button id="kioskSubmitButton" name="kioskSubmitButton" class="btn btn-success">Submit</button>
                        <a href="{{route('kiosk.index')}}" id="kioskCancelButton" name="kioskCancelButton" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
           </fieldset>
        </form>

</div>
@endsection
