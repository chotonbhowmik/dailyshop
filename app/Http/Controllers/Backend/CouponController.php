<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('title', 'asc')->get();
        return view('backend.pages.coupon.manage',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request -> validate([
           'title' => 'required|max: 255',
        ],
        [
          'title.required' => 'Please Insert The Category Name',  
        ]);

        $coupon = new Coupon();
        $coupon->title      = $request->title;
        $coupon->code               = $request->code;
        $coupon->value              = $request->value;
        $coupon->type               = $request->type;
        $coupon->min_order_amt      = $request->min_order_amt;
        $coupon->is_one_time        = $request->is_one_time;
        $coupon->status              = $request->status;
        
        $coupon->save();
        return redirect()->route('coupon.manage');
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
         
         $coupon = Coupon::find($id);
        if ( !is_null($coupon)) {
            return view('backend.pages.coupon.edit', compact('coupon'));
            
        }
        else{

            return redirect()->route('coupon.manage');

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
        $request -> validate([
           'title' => 'required|max: 255',
        ],
        [
          'title.required' => 'Please Insert The Category Name',  
        ]);

        $coupon = Coupon::find($id);
        $coupon->title      = $request->title;
        $coupon->code               = $request->code;
        $coupon->value              = $request->value;
        $coupon->type               = $request->type;
        $coupon->min_order_amt      = $request->min_order_amt;
        $coupon->is_one_time        = $request->is_one_time;
        $coupon->status              = $request->status;

       


        $coupon->save();
        return redirect()->route('coupon.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        if (!is_null( $coupon ))
         {
          
            $coupon->delete(); 
            return redirect()->route('coupon.manage'); 
        }
        else{
            return redirect()->route('coupon.manage');

        }
    }
}
