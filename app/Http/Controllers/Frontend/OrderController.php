<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Cart;
use App\Models\Backend\Category;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Frontend\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cartItems = Cart::orderBy('id', 'asc')->where('order_id', NULL)->get();
        return view('frontend.pages.checkout', compact('cartItems')); 
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
         $request->validate([
          'fname'   => 'required|max:255',
          'lname'   => 'required|max:255',
          'address' => 'required|max:255',
       ],
       [
          'fname.required' => 'Please Insert Your Name',
          'lname.required' => 'Please Insert Your last name',
          'address.required' => 'Please Insert Your Shipping Address',
       ] );

         $order = new Order();
       if (Auth::check()) {
           $cart1 = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();
           dd($cart1);
        }
        else{
            $cart2 = Cart::where('ip_address', request()->ip())->where('product_id', $request->product_id)->first();

        }


        // if (Auth::check()) {
        //    $order->user_id = Auth::id();
        // }
        // else{
        //     $order->ip_address = $request->ip();
        // }

        //     $order->first_name         = $request->fname;
        //     $order->last_name          = $request->lname;
        //     $order->email              = $request->email;
        //     $order->phone              = $request->phone;
        //     $order->shipping_address   = $request->shipping_address;
            
        //     $order->additional_message = $request->additional_message;
        //     $order->product_finalprice = $request->product_finalprice;
        //     $order->payment_id         = $request->exampleRadios;
          


        //     if ($order->payment_id == 1) {
        //         $order->transaction_id     = $request->btransction_id;
        //     }
           
        //     else if ($order->payment_id == 2) {
        //         $order->transaction_id     = $request->ntransction_id;
        //     }

        //     $order->save();


        //     foreach ( Cart::totalCarts() as $cart ) {

        //         $cart->order_id = $order->id;

        //         if (Auth::check() ) {
        //            $cart->user_id = Auth::id();
        //         }
        //         else{
        //             $cart->ip_address = $request->ip();
        //         }

        //         $cart->save();

                
        //     }
           
        
        // return redirect()->route('homepage');




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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
