<?php

namespace App\Http\Controllers;

use App\Kiosk;
use App\Disk;
use App\Customer;
use App\Movie;
use App\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $rentals = Disk::has('customers')
            ->with('customers')
            ->get()
            //->where()
            ->toArray();

        $movies = Movie::get()->toArray();
        $kiosks = Kiosk::get()->toArray();

        return view('rental/rentalIndex')->with('rentals', $rentals)->with('movies', $movies)->with('kiosks', $kiosks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $type = 'DVD';

        $disks = Disk::get()->where('Movie_ID', $id)->where('Type', $type)->where('is?rented', '0')->toArray();
        $customers = Customer::get()->toArray();
        $kiosks = Kiosk::get()->toArray();
        $movie = Movie::get()->where('id', $id)->toArray();

        return view('rental/rentalCreate')->with('customers', $customers)
            ->with('disks', $disks)
            ->with('kiosks', $kiosks)
            ->with('movies', $movie);
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
        $disk_id = $request->disk_ID;
        $customer_id = $request->customer_ID;
        $movie_id = $request->movie_ID;
        $rental_Date = date('Y-m-d H:i:s');

        $rental = Disk::find($disk_id);
        $rental['movie_ID'] = $rental['Movie_ID'];

        $rental->customers()->attach($customer_id, ['Movie_ID' => $movie_id], ['Rent_Date' => $rental_Date] );

        //if the rental goes through
        // go to the disk is?rented field and change the value.


        return redirect()->route('disk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }

    public function AdminIndex()
    {
        //

        $rentals = Disk::has('customers')
            ->with('customers')
            ->get()
            ->where('is?rented', '0')
            ->toArray();

        $movies = Movie::get()->toArray();
        $kiosks = Kiosk::get()->toArray();

        return view('rental/rentalIndex')->with('rentals', $rentals)->with('movies', $movies)->with('kiosks', $kiosks);
    }
}
