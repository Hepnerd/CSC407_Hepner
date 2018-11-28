<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests\MovieValidation;
use App\Movie;
use App\Review;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Movie = Movie::get()->toArray();
        $Review = Review::get()->toArray();

        return view('Movie/MovieIndex')->with('movie', $Movie)->with('review', $Review);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        //
        $Genres = Genre::get()->toArray();
        $Movie = Movie::get()->toArray();

        return view('Movie/MovieManage')->with('Movie', $Movie)->with('Genres', $Genres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Movie/MovieCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MovieValidation $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieValidation $request)
    {
        //
        $input = $request->all();

        $Movie = new Movie($input);

        $Movie->save();

        if ($request->file('coverPhoto')) {
            $this->savePicture($request, $Movie);
        }

        return redirect()->route('movie.manage');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $Movie)
    {
        //dd($Movie[0]);
        return view('MovieUpdate')->with('Movie', $Movie[0]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $Movie)
    {
        $genres = Genre::get()->toArray();

        return view('Movie/MovieUpdate')->with('Movie', $Movie)->with('Genres', $genres);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MovieValidation $request
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieValidation $request, Movie $Movie)
    {
        //

        $Movie->title = $request['title'];
        $Movie->length = $request['length'];
        $Movie->description = $request['description'];
        $Movie->genreID = $request['genreID'];

        if (array_key_exists('onBlueRay', $request)) {
            $Movie->onBlueRay = $request['onBlueRay'];
        }

        if (array_key_exists('onDVD', $request)) {
            $Movie->onDVD = $request['onDVD'];
        }

        $Movie->save();

        if ($request->file('coverPhoto')) {
            $this->savePicture($request, $Movie);
        }



        return redirect()->route('movie.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $Movie)
    {
        $selectedDelete = Movie::findOrFail($Movie['id']);
        if ($selectedDelete->delete()) {

            return redirect()->route('movie.manage');
        }
    }


    private function savePicture(Request $request, Movie $movie)
    {
        $original = $request->file('coverPhoto');

        $image = Image::make($original)->resize(250, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 75);

        $filename = 'movie_' . $movie->id . '.jpg';

        if (Storage::disk('web')->exists($filename)) {
            Storage::disk('web')->delete($filename);
        }

        Storage::disk('web')->put($filename, $image->getEncoded());
    }
}
