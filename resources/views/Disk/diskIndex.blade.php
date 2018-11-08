@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">Disk List</h1>

    <table class="disk_table" align="center">
        <thead>
        <tr>
            <th style="text-align:center; padding-left: 45px;">Disk Title</th>
            <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Disk Location</th>
            <th style="text-align:center; padding-right: 45px;">Disk Type</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        {{-- Loop through all of the people that rented a car --}}
        @foreach($disks as $disk)


            {{-- Loop through all of the movies that has a kiosk --}}
            @foreach($disk['kiosks'] as $kiosk)
                <tr>
                    <td style="text-align:center; padding-left: 45px;">{{ $disk['title'] }}</td>
                    <td style="text-align:center; padding-right: 45px; padding-left: 45px;">{{ $kiosk['location'] }}</td>
                    <td style="text-align:center; padding-right: 45px;">{{ $kiosk['pivot']['Type'] }}</td>
                    <td><a href="{{route('disk.edit', $kiosk['pivot']['id'])}}" id="diskEditButton" name="diskEditButton" class="btn btn-primary">Edit</a></td>
                    <td>

                        <form method="POST" action="{{ route('disk.destroy', $kiosk['pivot']['id']) }}">
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