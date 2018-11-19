@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">All Current Customer Rentals</h1>

    <table class="disk_table" align="center">
        <thead>
            <tr>
                <th style="text-align:center; padding-left: 45px;">Movie Rental Title</th>
                <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Rental Location</th>
                <th style="text-align:center; padding-right: 45px;">Disk Rental Type</th>
                <th style="text-align:center; padding-right: 45px;">Customer ID</th>
                <th style="text-align:center; padding-right: 45px;">Rental Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        @foreach($rentals as $rental)

            @foreach($rental['customers'] as $customer)
                <tr>
                    <td style="text-align:center; padding-left: 45px;">{{$rental['movie']['title']}}</td>
                    <td style="text-align:center; padding-left: 45px; padding-right: 45px;">{{$rental['kiosk']['location']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$rental['Type']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$customer['name']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$customer['pivot']['Rent_Date']}}</td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>

                    <td><a href="{{route('rental.edit', $customer['pivot']['id'])}}" id="rentalReturnButton" name="rentalReturnButton" class="btn btn-primary">Return</a></td>
                    
                </tr>

            @endforeach
        @endforeach
        </tbody>
    </table>

@endsection