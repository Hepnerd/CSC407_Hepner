<?php

namespace App\Http\Controllers;

use App\Http\Requests\KioskValidation;
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

        return view('Kiosk/kioskIndex')->with('kiosk', $kiosk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Kiosk/kioskCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KioskValidation  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KioskValidation $request)
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

        return view('Kiosk/kioskUpdate')->with('kiosk', $kiosk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KioskValidation  $request
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function update(KioskValidation $request, Kiosk $kiosk)
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
        $selectedDelete = Kiosk::findOrFail($kiosk['id']);



        if($selectedDelete->delete()){

            return redirect()->route('kiosk.index');
        }
    }
}
