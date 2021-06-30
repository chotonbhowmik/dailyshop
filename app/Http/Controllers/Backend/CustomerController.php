<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('name', 'asc')->get();
        return view('backend.pages.customer.manage',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $customer = Customer::find($id);
        if ( !is_null($customer)) {
            return view('backend.pages.customer.edit', compact('customer'));
            
        }
        else{

            return redirect()->route('customer.manage');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $customer =Customer::find($id);
         
        $customer->name         = $request->name;
        $customer->email         = $request->email;
        $customer->password         = $request->password;
        $customer->mobile         = $request->mobile;

        $customer->address         = $request->address;
        $customer->city         = $request->city;
        $customer->state         = $request->state;
        $customer->zip         = $request->zip;

        $customer->company         = $request->company;

        $customer->gstir         = $request->gstir;
        $customer->status                = $request->status;
        
        $customer->save();
        return redirect()->route('customer.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $customer = Customer::find($id);
        if (!is_null( $customer ))
         {
          
            $customer->delete(); 
            return redirect()->route('customer.manage'); 
        }
        else{
            return redirect()->route('customer.manage');

        }
    }
}
