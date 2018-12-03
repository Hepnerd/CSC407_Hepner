<?php

namespace App\Http\Controllers;

use App\Kiosk;
use App\Disk;
use App\Customer;
use App\Movie;
use App\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $kiosks = Kiosk::get()->toArray();
        $rentals = Disk::has('customers')
            ->with('customers')
            ->with('movie')
            ->with('kiosk')
            ->get()
            ->toArray();

        return view('rental/rentalIndex')->with('rentals', $rentals)->with('kiosks', $kiosks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $type)
    {
        //

        $disks = Disk::where('Movie_ID', $id)->where('Type', $type)->where('is?rented', '0')->get()->toArray();
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
        $customer_id = Auth::user()->id;
        $movie_id = $request->movie_ID;
        $rental_Date = date('m-d-Y');


        $rental = Disk::find($disk_id);

        $rental->customers()->attach($customer_id, ['Movie_ID' => $movie_id , 'Rent_Date' => $rental_Date] );

        //if the rental goes through
        // go to the disk is?rented field and change the value.
        Disk::where('id', $disk_id )->update(['is?Rented' => 1, 'kiosk_ID' => null]);

        return redirect()->route('rental.index');
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

        $kiosks = Kiosk::get()->toArray();

        return view('rental/rentalReturn')->with('rental', $rental)->with('kiosks', $kiosks);

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
        $return_Date = date('m-d-Y H:i:s');
        $rental->Return_Date = $return_Date;
        $rental->Returned_To = $request['Kiosk_ID'];
        $rental->save();

        $disk_id = $rental['Disk_ID'];
        $returnKiosk=$request->Kiosk_ID;

        Disk::where('id', $disk_id)->update(['is?rented'=>0, 'Kiosk_ID'=> $returnKiosk]);
        return redirect()->route('rental.index');
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

        $kiosks = Kiosk::get()->toArray();
        $rentals = Disk::has('customers')
            ->with('customers')
            ->with('movie')
            ->with('kiosk')
            ->get()
            ->toArray();

        return view('rental/rentalAdminIndex')->with('rentals', $rentals)->with('kiosks', $kiosks);
    }
}
