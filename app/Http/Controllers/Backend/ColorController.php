<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $colors = Color::orderBy('color', 'asc')->get();
        return view('backend.pages.color.manage',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.color.create');
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
           'color' => 'required|max: 255',
        ],
        [
          'color.required' => 'Please Insert The Size Name',  
        ]);

        $color = new Color();
        $color->color         = $request->color;
        
        $color->status                = $request->status;
        
        $color->save();
        return redirect()->route('color.manage');
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
         $color = Color::find($id);
        if ( !is_null($color)) {
            return view('backend.pages.color.edit', compact('color'));
            
        }
        else{

            return redirect()->route('color.manage');

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
           'color' => 'required|max: 255',
        ],
        [
          'color.required' => 'Please Insert The color Name',  
        ]);

        $color =Color::find($id);
        $color->color         = $request->color;
        
        $color->status                = $request->status;
       


        $color->save();
        return redirect()->route('color.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $color = Color::find($id);
        if (!is_null( $color ))
         {
          
            $color->delete(); 
            return redirect()->route('color.manage'); 
        }
        else{
            return redirect()->route('color.manage');

        }
    }
}
