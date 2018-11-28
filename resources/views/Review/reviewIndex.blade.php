@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">All Current Customer Reviews</h1>

    <table class="disk_table" align="center">
        <thead>
            <tr>
                <th style="text-align:center; padding-left: 45px;">Customer ID</th>
                <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Movie ID</th>
                <th style="text-align:center; padding-right: 45px;">Review</th>
                <th style="text-align:center; padding-right: 45px;">Rating</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        @foreach($review as $review)
                <tr>
                    <td style="text-align:center; padding-left: 45px;">{{$review['customer_id']}}</td>
                    <td style="text-align:center; padding-left: 45px; padding-right: 45px;">{{$review['movie_id']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$review['review']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$review['rating']}}</td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                    <td style="text-align:center; padding-right: 45px;"></td>
                </tr>
        @endforeach
        </tbody>
    </table>

@endsection
