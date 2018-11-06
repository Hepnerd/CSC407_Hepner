@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align:center; text-decoration: underline">Kiosk List</h1>

    <table class="kiosk_table" align="center">
        <thead>
        <tr>
            <th style="text-align:center;">Kiosk's Location</th>
            <th style="text-align:center;">Address</th>
            <th style="text-align:center;"></th>
            <th style="text-align:center;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($kiosk as $kiosks)

            <tr>
                <td>{{ $kiosks['location'] }}</td>
                <td style="text-align:center; padding-right: 45px; padding-left: 45px;">{{ $kiosks['address'] }}</td>
                <td><a href="{{route('kiosk.create')}}" id="kioskAddButton" name="kioskAddButton" class="btn btn-success">Add</a></td></td>
                <td><a href="{{route('kiosk.edit', $kiosks['id'])}}" id="kioskEditButton" name="kioskEditButton" class="btn btn-primary">Edit</a></td>
                <td>

                    <form method="POST" action="{{ route('kiosk.destroy', $kiosks['id']) }}">
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
        </tbody>
    </table>
</div>
@endsection