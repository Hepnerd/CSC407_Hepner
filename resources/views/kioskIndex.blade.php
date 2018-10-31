@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align:center; text-decoration: underline">Kiosk List</h1>

    <table class="kiosk_table" align="center">
        <thead>
        <tr>
            <th style="text-align:center;">Kiosk's Location</th>
            <th style="text-align:center;">Address</th>
            <th style="text-align:center;">Button Bar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kiosk as $kiosks)

            <tr>
                <td>{{ $kiosks['location'] }}</td>
                <td style="text-align:center;">{{ $kiosks['address'] }}</td>
                <td><a href="{{route('kiosk.edit', $kiosks['id'])}}" id="kioskEditButton" name="kioskEditButton" class="btn btn-primary">Edit</a>
                    <a href="{{route('movie.index')}}" id="kioskDeleteButton" name="kioskDeleteButton" class="btn btn-danger">Delete</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
@endsection