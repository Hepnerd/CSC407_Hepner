<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Review;
use App\Movie;
use App\Rental;
use Illuminate\Support\Facades\Auth;
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
        $customer_id = Auth::user()->id;
        $movie = Movie::get()->toArray();
        $review = Review::get()->where('customer_id', $customer_id)->toArray();
        return view('Review/reviewIndex')->with('review', $review)->with('movies', $movie);
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
      //$review = new Customer($request);
      $review=$request->all();
      $customer_id = Auth::user()->id;
      //dd($customer_id);
      //dd($review);
      //dd($review);
      $review->reviews()->attach($customer_id);
      //$review->customer_id=$customer_id;
      dd($review);



      //$review = new Review($review);
      $review->save();

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
