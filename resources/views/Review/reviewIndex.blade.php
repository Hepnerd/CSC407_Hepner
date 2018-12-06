@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; text-decoration: underline">Your Current Customer Reviews</h1>

    <table class="disk_table" align="center">
        <thead>
            <tr>
                <th style="text-align:center; text-align:center; padding-right: 45px; padding-left: 45px;">Movie</th>
                <th style="text-align:center; padding-right: 45px;">Review</th>
                <th style="text-align:center; padding-right: 45px;">Rating</th>
            </tr>
        </thead>
        <tbody>

        @foreach($review as $review)
                <tr>
                    @foreach($movies as $movie)
                    @if($review['movie_id'] == $movie['id'])
                    <td style="text-align:center; padding-left: 45px; padding-right: 45px;">{{$movie['title']}}</td>
                    @endif
                    @endforeach

                    <td style="text-align:center; padding-right: 45px;">{{$review['review']}}</td>
                    <td style="text-align:center; padding-right: 45px;">{{$review['rating']}}/10</td>
                </tr>
        @endforeach
        </tbody>
    </table>

@endsection
