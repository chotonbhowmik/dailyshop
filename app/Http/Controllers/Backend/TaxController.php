<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Tax;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $taxs = Tax::orderBy('tax_value', 'asc')->get();
        return view('backend.pages.tax.manage',compact('taxs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

        $tax = new Tax();
        $tax->tax_desc         = $request->tax_desc;
        $tax->tax_value         = $request->tax_value;
        $tax->status                = $request->status;
        
        $tax->save();
        return redirect()->route('tax.manage');
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
          $tax = Tax::find($id);
        if ( !is_null($tax)) {
            return view('backend.pages.tax.edit', compact('tax'));
            
        }
        else{

            return redirect()->route('tax.manage');

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
        

        $tax =Tax::find($id);
         
        $tax->tax_desc         = $request->tax_desc;
        $tax->tax_value         = $request->tax_value;
        $tax->status                = $request->status;
        
        $tax->save();
        return redirect()->route('tax.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tax = Tax::find($id);
        if (!is_null( $tax ))
         {
          
            $tax->delete(); 
            return redirect()->route('tax.manage'); 
        }
        else{
            return redirect()->route('tax.manage');

        }
    }
}
