<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //

        $movie = Movie::get()->toArray();

        return view('movieIndex')->with('movie', $movie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movieCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $Movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $Movie)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $Movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $Movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $Movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $Movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $Movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $Movie)
    {
        //
    }
}
