@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">All of Your Rentals and Returns</h1>

    <table class="disk_table" align="center">
        <thead>
        <tr>
            <th style="text-align:center; padding-left: 45px;">Movie Rental Title</th>
            <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Disk Rental Type</th>
            <th style="text-align:center; padding-right: 45px;">Customer Name</th>
            <th style="text-align:center; padding-right: 45px;">Rental Date</th>
            <th style="text-align:center; padding-right: 45px;">Return Date</th>
            <th style="text-align:center; padding-right: 45px;">Returned Location</th>
        </tr>
        </thead>
        <tbody>

        @foreach($rentals as $rental)

            <tr>
                <td style="text-align:center; padding-left: 45px;">{{$rental->title}}</td>
                <td style="text-align:center; padding-right: 45px;">{{$rental->type }}</td>
                <td style="text-align:center; padding-right: 45px;">{{$rental->customer }}</td>
                <td style="text-align:center; padding-right: 45px;">{{$rental->rent_date }}</td>
                <td style="text-align:center; padding-right: 45px;">{{$rental->return_date }}</td>
                <td style="text-align:center; padding-right: 45px;">{{$rental->location }}</td>

                @if($rental->return_date == null)
                    <td><a href="{{route('rental.edit', $rental->rental_id)}}" id="rentalReturnButton" name="rentalReturnButton" class="btn btn-primary">Return</a></td>
                @else
                    <td></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
