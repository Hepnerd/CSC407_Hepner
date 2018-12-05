<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Customer = Customer::get()->toArray();

        if($this->isAuthorized()){
            return view('Customer/customerIndex')->with('Customer', $Customer);
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
        return view('Customer/customerCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CustomerValidation  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerValidation $request)
    {
        //
        $input=$request->all();

        $customer = new Customer($input);
        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        return view('Customer/customerUpdate')->with('Customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CustomerValidation  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerValidation $request, Customer $customer)
    {
        //

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];

        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
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
