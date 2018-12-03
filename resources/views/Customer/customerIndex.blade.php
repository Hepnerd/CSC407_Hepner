@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align:center; text-decoration: underline">Customer List <a href="{{route('customer.create')}}" id="customerAddButton" name="customerAddButton" class="btn btn-success">Add</a></h1>

        <table class="Customer_table" align="center">
            <thead>
            <tr>
                <th style="text-align:center;">Customer's Name</th>
                <th style="text-align:center;">Email</th>
                <th style="text-align:center;"></th>
                <th style="text-align:center;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($Customer as $Customers)

                <tr>
                    <td>{{ $Customers['name'] }}</td>
                    <td style="text-align:center; padding-right: 45px; padding-left: 45px;">{{ $Customers['email'] }}</td>

                    <td><a href="{{route('customer.edit', $Customers['id'])}}" id="customerEditButton" name="customerEditButton" class="btn btn-primary">Edit</a></td>
                    <td>

                        <form method="POST" action="{{ route('customer.destroy', $Customers['id']) }}">
                            @method('DELETE')
                            @csrf
                            <!--<fieldset>
                                <!-- Button
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="deleteButton"></label>
                                        <div class="col-md-4">
                                            <button id="deleteButton" name="deleteButton" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                            <td><a id="deleteButton" name="deleteButton" class="btn btn-danger">Delete</a></td>

                        </form>

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
