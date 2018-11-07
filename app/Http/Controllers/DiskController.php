<?php

namespace App\Http\Controllers;

use App\Disk;
use App\Movie;
use App\Kiosk;
use Illuminate\Http\Request;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $disks = Movie::has('disk')
            ->with('disk')
            ->get()
            ->toArray();

        return view('disk.index')->with('disks', $disks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Movie = Movie::get()->toArray();
        $Kiosk = Kiosk::get()->toArray();

        return view('Disk/createDisk')->with('Movie', $Movie)->with('Kiosk', $Kiosk);
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
        $movie_ID = $request->movie_ID;
        $kiosk_ID = $request->kiosk_ID;

        $disk = Movie::find();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function show(Disk $disk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function edit(Disk $disk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disk $disk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disk $disk)
    {
        //
    }
}
