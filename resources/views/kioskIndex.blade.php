@extends('layouts.app')

@section('content')
    @foreach($kiosk as $kiosks)
        <h1>{{ $kiosks['location'] }}</h1>
    @endforeach
@endsection