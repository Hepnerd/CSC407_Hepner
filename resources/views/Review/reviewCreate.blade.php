@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('review.store')}}" enctype="multipart/form-data">
    <fieldset>
        @csrf
        <div class="container col-xs-12">
        <!-- Form Name -->
        @foreach($movies as $movie)
        <legend class="updateLegend">Create A New Review for {{$movie['title']}}</legend>
        @endforeach

        <!-- Select Basic -->
        <div class="form-group row">
            <label class="col-md-4 control-label" for="customer_id">Customer Name </label>
            <div class="col-md-4">
                <select id="customer_ID" name="customer_id" class="form-control">
                    @foreach($customers as $customer )
                        <option value="{{ $customer['id'] }}">{{ $customer['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group row">
            <label class="col-md-4 control-label updateTitleLabel updateTitleLabel" for="review">Review</label>
            <div class="col-md-4">
                <input id="review" name="review" type="text" placeholder="" value="{{old('title')}}"class="form-control input-md">
                @if($errors->has('review'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('review') }}</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 control-label updateTitleLabel" for="rating">Rating</label>
            <div class="col-md-5">
                <select id="rating" name="rating" class="form-control" value="{{old('rating')}}">
                    <option value="">Please select a number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="10">10</option>
                </select>
                @if($errors->has('rating'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('rating') }}</small>
                    </div>
                @endif
            </div>
        </div>
          <input type="hidden" id="movie_id" name="movie_id" value="{{ $movie['id'] }}">
        <!-- Button (Double) -->
        <div class="form-group row">
            <label class="col-md-4 control-label updateTitleLabel" for="submitButton"></label>
            <div class="col-md-8">
                <button id="submitButton" name="submitButton" class="btn btn-success">Submit</button>
                <a href="{{route('movie.index')}}" id="reviewCancelButton" name="reviewCancelButton" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        </div>
    </fieldset>
</form>

    @endsection
