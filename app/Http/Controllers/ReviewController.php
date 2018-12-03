<?php

namespace App\Http\Controllers;

use App\Review;
use App\Movie;
use App\Customer;
use App\Rental;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $review = Review::get()->toArray();

        return view('Review/reviewIndex')->with('review', $review);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      //

      $movie = Movie::get()->where('id', $id)->toArray();
      $customers = Customer::get()->toArray();

      return view('review/reviewCreate')->with('movies', $movie)->with('customers', $customers);
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
      $customer_id = Auth::user()->id;

      $review->reviews()->attach($customer_id);


      //$review = new Review($input);
      //$review->save();

      return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    public function adminIndex()
    {
      $customer_id = Auth::user()->id;

      $review = Review::get()->toArray();

      return view('Review/reviewIndex')->with('review', $review);
    }

    public function manage()
    {
        //
        $customer_id = Auth::user()->id;

        $review = Review::where('id', $customer_id)->get()->toArray();

        return view('Review/ReviewIndex');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
