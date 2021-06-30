<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use Illuminate\Support\Str;
Use Image;
Use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('category_name', 'asc')->get();
        return view('backend.pages.category.manage',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.create');
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
           'category_name' => 'required|max: 255',
        ],
        [
          'category_name.required' => 'Please Insert The Category Name',  
        ]);

        $category = new Category();
        $category->category_name         = $request->category_name;
        $category->category_slug         = $request->category_slug;
        $category->is_parent             = $request->is_parent;
        
        $category->status                = $request->status;
         if ($request->image) {
            $image = $request->file('image');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/category/' .$img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        
        $category->save();
        return redirect()->route('category.manage');
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
         
         $category = Category::find($id);
        if ( !is_null($category)) {
            return view('backend.pages.category.edit', compact('category'));
            
        }
        else{

            return redirect()->route('category.manage');

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
           'category_name' => 'required|max: 255',
        ],
        [
          'category_name.required' => 'Please Insert The Category Name',  
        ]);

        $category =Category::find($id);
        $category->category_name         = $request->category_name;
        $category->category_slug         = $request->category_slug;
        $category->is_parent             = $request->is_parent;
       
        $category->status                = $request->status;

        if ($request->image) {

            if (File::exists('Backend/img/category/' . $category->image)) {
               File::delete('Backend/img/category/' . $category->image);
            }


            $image = $request->file('image');
            $img = rand() .'.' .$image->getClientOriginalExtension();
            $location = public_path('Backend/img/category/' .$img);
            Image::make($image)->save($location);
            $category->image = $img;
        }

       


        $category->save();
        return redirect()->route('category.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $category = Category::find($id);
        if (!is_null( $category ))
         {
          
            $category->delete(); 
            return redirect()->route('category.manage'); 
        }
        else{
            return redirect()->route('category.manage');

        }
    }
}
