<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Product;
use App\Models\Backend\Brand;
use App\Models\Backend\Tax;

Use Image;
Use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::orderBy('title', 'asc')->get();
        return view('backend.pages.product.manage',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('backend.pages.product.create',compact('brands')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = new Product();
        $product->category_id               = $request->category_id;
        $product->title                     = $request->title;
        $product->slug                      = $request->slug;
        $product->brand                     = $request->brand;
        $product->model                     = $request->model;
        $product->short_desc                = $request->short_desc;
        $product->desc                      = $request->desc;
        $product->keyword                   = $request->keyword;
        $product->technical_specification   = $request->technical_specification;
        $product->uses                      = $request->uses;

        $product->warranty                  = $request->warranty;

        $product->lead_time                 = $request->lead_time;
        $product->tax_id                      = $request->tax_id;
        
        $product->is_promo                  = $request->is_promo;
        $product->is_featured               = $request->is_featured;
        $product->is_discounted             = $request->is_discounted;
        $product->is_tranding               = $request->is_tranding;



        $product->status                 = $request->status;

         $product->sku                   = $request->sku;
        $product->regular_price          = $request->regular_price;
         $product->offer_price           = $request->offer_price;
        $product->Quantity               = $request->Quantity;
         $product->size_one              = $request->size_one;
        $product->size_two               = $request->size_two;
         $product->color_one             = $request->color_one;
        $product->color_two              = $request->color_two;

        
        

        if ($request->image) {
            $image = $request->file('image');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' .$img);
            Image::make($image)->save($location);
            $product->image = $img;
        }
         if ($request->image_one) {
            $image = $request->file('image_one');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' .$img);
            Image::make($image)->save($location);
            $product->image_one = $img;
        }
         if ($request->image_two) {
            $image = $request->file('image_two');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' .$img);
            Image::make($image)->save($location);
            $product->image_two = $img;
        }
        $product->save();
        return redirect()->route('product.manage');
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
         $product = Product::find($id);
        if ( !is_null($product)) {
            return view('backend.pages.product.edit', compact('product'));
            
        }
        else{

            return redirect()->route('product.manage');

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
        $product = Product::find($id);
      $product->category_id             = $request->category_id;
        $product->title              = $request->title;
        $product->slug               = $request->slug;
        $product->brand              = $request->brand;
        $product->model              = $request->model;
        $product->short_desc          = $request->short_desc;
        $product->desc                        = $request->desc;
        $product->keyword                      = $request->keyword;
        $product->technical_specification          = $request->technical_specification;
        $product->uses                         = $request->uses;

        $product->warranty       = $request->warranty;

         $product->lead_time                 = $request->lead_time;
        $product->tax_id                       = $request->tax_id;
      
        $product->is_promo                  = $request->is_promo;
        $product->is_featured               = $request->is_featured;
        $product->is_discounted             = $request->is_discounted;
        $product->is_tranding               = $request->is_tranding;

        $product->status          = $request->status;

         $product->sku       = $request->sku;
        $product->regular_price          = $request->regular_price;
         $product->offer_price       = $request->offer_price;
        $product->Quantity          = $request->Quantity;
         $product->size_one       = $request->size_one;
        $product->size_two          = $request->size_two;
         $product->color_one       = $request->color_one;
        $product->color_two          = $request->color_two;

        
        if ($request->image) {

            if (File::exists('Backend/img/product/' . $product->image)) {
               File::delete('Backend/img/product/' . $product->image);
            }


            $image = $request->file('image');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' .$img);
            Image::make($image)->save($location);
            $product->image = $img;
        }



          if ($request->image_one) {

            if (File::exists('Backend/img/product/' . $product->image_one)) {
               File::delete('Backend/img/product/' . $product->image_one);
            }


            $image = $request->file('image_one');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' .$img);
            Image::make($image)->save($location);
            $product->image_one = $img;
        }


        if ($request->image_two) {

            if (File::exists('Backend/img/product/' . $product->image_two)) {
               File::delete('Backend/img/product/' . $product->image_two);
            }


            $image = $request->file('image_two');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/product/' .$img);
            Image::make($image)->save($location);
            $product->image_two = $img;
        }



        $product->save();
        return redirect()->route('product.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product = Product::find($id);
        if (!is_null( $product ))
         {
          if (File::exists('Backend/img/product/' . $product->image)) {
               File::delete('Backend/img/product/' . $product->image);
            }
            if (File::exists('Backend/img/product/' . $product->image_one)) {
               File::delete('Backend/img/product/' . $product->image_one);
            }

            if (File::exists('Backend/img/product/' . $product->image_two)) {
               File::delete('Backend/img/product/' . $product->image_two);
            }
            $product->delete(); 
            return redirect()->route('product.manage'); 
        }
        else{
            return redirect()->route('product.manage');

        }
    }
}
