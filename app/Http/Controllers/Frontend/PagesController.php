<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Product;
use App\Models\Backend\Brand;
use App\Models\Backend\Color;
use App\Models\Backend\Slider;
use App\Models\Backend\Size;
use Illuminate\Support\Str;
Use Image;
Use File;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::orderBy('category_name', 'asc')->where(['status'=>1])->get();
      $newArrivals = Product::orderBy('id','desc')->get();
      $brands = Brand::orderBy('id','asc')->where(['is_featured' =>1])->get();
       $sliders = Slider:: orderBy('id', 'asc')->get();
      return view('frontend.pages.home',compact('categories', 'newArrivals','brands','sliders'));
    }

     //all product show
    public function products()

    {   
        $products = Product::orderBy('id', 'desc')->paginate(6);
        return view('frontend.pages.products.products', compact('products'));
    }

   //single product details view
    public function productshow($slug)


    {

       $value      = product::where('slug',$slug)->first();
             // $product=DB::table()
       $color      = color::orderBy('color','asc')->where('id',$value->color_one)->first();
       $colors     = color::orderBy('color','asc')->where('id',$value->color_two)->first();
       $size       = size::orderBy('size','asc')->where('id',$value->size_one)->first();
       $sizes       = size::orderBy('size','asc')->where('id',$value->size_one)->first();
        if (!is_null($value)) {
           return view('frontend.pages.products.details', compact('value','color','colors','size','sizes')); 
        }
        else{
            return back();
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
