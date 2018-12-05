@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">All of Your Rentals and Returns</h1>

    <table class="disk_table" align="center">
        <thead>
            <tr>
                <th style="text-align:center; padding-left: 45px;">Movie Rental Title</th>
                <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Disk Rental Type</th>
                <th style="text-align:center; padding-right: 45px;">Rental Date</th>
                <th style="text-align:center; padding-right: 45px;">Return Date</th>
                <th style="text-align:center; padding-right: 45px;">Returned Location</th>
            </tr>
        </thead>
        <tbody>

        @foreach($rentals as $rental)

            @foreach($rental['customers'] as $customer)
                <tr>
                    <td style="text-align:center; padding-left: 45px;">{{$rental['movie']['title']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$rental['Type']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$customer['pivot']['Rent_Date']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$customer['pivot']['Return_Date']}}</td>

                    @if($customer['pivot']['Returned_To'] == null)
                        <td style="text-align:center; padding-right: 45px;"></td>
                    @else
                        @foreach($kiosks as $kiosk)
                            @if($kiosk['id'] == $customer['pivot']['Returned_To'])
                        <td style="text-align:center; padding-right: 45px;">{{$kiosk['location']}}</td>
                            @endif
                        @endforeach
                    @endif

                    <td><a href="/review/create/{{ $rental['movie']['id'] }}" class="btn btn-success">Create Review</a></td>

                    @if($customer['pivot']['Return_Date'] == null)
                    <td><a href="{{route('rental.edit', $customer['pivot']['id'])}}" id="rentalReturnButton" name="rentalReturnButton" class="btn btn-primary">Return</a></td>
                    @else
                    <td></td>
                    @endif
                </tr>

            @endforeach
        @endforeach
        </tbody>
    </table>

@endsection
