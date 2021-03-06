<?php

namespace App\Http\Controllers;

use App\Disk;
use App\Movie;
use App\Kiosk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $disks = Movie::has('kiosks')
            ->with('kiosks')
            ->get()
            ->toArray();

        if($this->isAuthorized()){
            return view('Disk/diskIndex')->with('disks', $disks);
        }
        else{
            return redirect()->action('MovieController@index');
        }
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

        if($this->isAuthorized()){
            return view('Disk/diskCreate')->with('Movie', $Movie)->with('Kiosk', $Kiosk);
        }
        else{
            return redirect()->action('MovieController@index');
        }
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
        $type = $request->type;
        $disk = Movie::find($movie_ID);

        $disk->kiosks()->attach($kiosk_ID, ['Type' => $type]);

        return redirect()->route('disk.index');
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
        $Movie = Movie::get()->toArray();
        $Kiosk = Kiosk::get()->toArray();

        if($this->isAuthorized()){
            return view('Disk/diskUpdate')->with('disk', $disk)
                ->with('Movie', $Movie)
                ->with('Kiosk', $Kiosk);
        }
        else{
            return redirect()->action('MovieController@index');
        }
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
        $disk['movie_ID'] = $request->movie_ID;
        $disk['Type'] = $request->type;
        $disk['kiosk_ID'] = $request->kiosk_ID;

        $disk->save();

        return redirect()->route('disk.index');
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
        if ($disk->delete()) {

            return redirect()->route('disk.index');
        }
    }

    public function isAuthorized()
    {
        //
        if(Auth::user()->email == 'brettwebb63@gmail.com'){
            return true;
        }
        else{
            return false;
        }

    }
}
