<?php

namespace App\Http\Controllers;

use App\Kiosk;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KioskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kiosk = Kiosk::get()->toArray();

        return view('kioskIndex')->with('kiosk', $kiosk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kioskCreate');
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

        $kiosk = new Kiosk($input);
        $kiosk->save();

        return redirect()->route('kiosk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function show(Kiosk $kiosk)
    {
        //
        $kiosk = Kiosk::get()->where('id', $kiosk->id)->toArray();

        return $kiosk;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function edit(Kiosk $kiosk)
    {
        //
        $kiosk = Kiosk::get()->where('id', $kiosk->id)->toArray();
        //dd($kiosk[0]);
        return view('kioskUpdate')->with('kiosk', $kiosk[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kiosk $kiosk)
    {
        //
        $kiosk = Kiosk::findorFail($request['id']);

        $kiosk->location = $request['location'];
        $kiosk->address = $request['address'];

        $kiosk->save();

        return redirect()->route('kiosk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kiosk $kiosk)
    {
        //
    }
}
