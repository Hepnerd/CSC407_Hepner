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

        $Movie = Movie::get()->toArray();

        return view('MovieIndex')->with('movie', $Movie);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage() {
        //

        $Movie = Movie::get()->toArray();

        return view('MovieManage')->with('Movie', $Movie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('MovieCreate');
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
        $input=$request->all();

        $Movie = new Movie($input);
        $Movie->save();

        return redirect()->route('Movie.index');

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
        $Movie = Movie::get()->where('id', $Movie->id)->toArray();
        //dd($Movie[0]);
        return view('MovieUpdate')->with('Movie', $Movie[0]);

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
        $Movie = Movie::get()->where('id', $Movie->id)->toArray();
        //dd($Movie[0]);
        return view('MovieUpdate')->with('Movie', $Movie[0]);
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
        $Movie = Movie::findorFail($request['id']);

        $Movie->title = $request['title'];
        $Movie->length = $request['length'];
        $Movie->description = $request['description'];
        $Movie->onDVD = $request['onDVD'];
        $Movie->onBlueRay = $request['onBlueRay'];
        $Movie->coverPhoto = $request['coverPhoto'];

        $Movie->save();

        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $Movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $Movie)
    {
        $selectedDelete = Movie::findOrFail($Movie['id']);
        if($selectedDelete->delete()){

            return redirect()->route('movie.index');
        }
    }
}
