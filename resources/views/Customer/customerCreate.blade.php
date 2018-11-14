@extends('layouts.app')

@section('content')

    <div class="container">

        <form method="POST" action="{{route('customer.store')}}">
            @csrf
            <fieldset>
                <!-- Form Name -->
                <legend class="updateLegend">Add A New customer </legend>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="name" class="updateTitleLabel">customer name</label>
                    <div class="col-md-4">
                        <input id="name" name="name" type="text" placeholder="Tom Cruise" class="form-control input-md" value="{{old('name')}}">
                        @if($errors->has('name'))
                            <div>
                                <small id="passwordHelp" class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                        @endif
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group row  text-right">
                    <label class="col-md-4 control-label" for="email" class="updateTitleLabel">customer email</label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="thisisavalidemail at gmail.com " class="form-control input-md" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <div>
                                <small id="passwordHelp" class="text-danger">{{ $errors->first('email') }}</small>
                            </div>
                        @endif
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group row  text-right">
                    <label class="col-md-4 control-label" for="password" class="updateTitleLabel">password</label>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
                        @if($errors->has('password'))
                            <div>
                                <small id="passwordHelp" class="text-danger">{{ $errors->first('password') }}</small>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group row  text-right">
                    <label class="col-md-4 control-label" for="confirmPassword" class="updateTitleLabel">Confirm Password</label>
                    <div class="col-md-4">
                        <input id="confirmPassword" name="ConfirmPassword" type="password" placeholder="" class="form-control input-md">
                        @if($errors->has('confirmPassword'))
                            <div>
                                <small id="passwordHelp" class="text-danger">{{ $errors->first('confirmPassword') }}</small>
                            </div>
                        @endif
                    </div>
                </div>


                <!-- Button (Double) -->
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="customerSubmitButton"></label>
                    <div class="col-md-8">
                        <button id="customerSubmitButton" name="customerSubmitButton" class="btn btn-success">Submit</button>
                        <a href="{{route('customer.index')}}" id="customerCancelButton" name="customerCancelButton" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

    @endsection
