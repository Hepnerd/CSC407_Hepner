@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">Rental List</h1>

    <table class="disk_table" align="center">
        <thead>
            <tr>
                <th style="text-align:center; padding-left: 45px;">Movie Rental Title</th>
                <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Rental Location</th>
                <th style="text-align:center; padding-right: 45px;">Disk Rental Type</th>
                <th style="text-align:center; padding-right: 45px;">Customer ID</th>
                <th style="text-align:center; padding-right: 45px;">Rental Date</th>
                <th style="text-align:center; padding-right: 45px;">Due Date</th>
                <th style="text-align:center; padding-right: 45px;">Is it currently rented?</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        @foreach($rentals as $rental)

            @foreach($rental['disk'] as $disk)
                <tr>
                    <td style="text-align:center; padding-left: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px; padding-left: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>

                    <td><a href="{{route('rental.edit')}}" id="rentalEditButton" name="rentalEditButton" class="btn btn-primary">Edit</a></td>
                    <td>

                        <form method="POST" action="{{ route('rental.destroy') }}">
                            @method('DELETE')
                            @csrf
                            <fieldset>
                                <!-- Button -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="deleteButton"></label>
                                        <div class="col-md-4">
                                            <button id="deleteButton" name="deleteButton" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </td>
                </tr>

            @endforeach
        @endforeach
        </tbody>
    </table>

@endsection