<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::orderBy('size', 'asc')->get();
        return view('backend.pages.size.manage',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.size.create');
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
           'size' => 'required|max: 255',
        ],
        [
          'size.required' => 'Please Insert The Size Name',  
        ]);

        $size = new Size();
        $size->size         = $request->size;
        
        $size->status                = $request->status;
        
        $size->save();
        return redirect()->route('size.manage');
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
        $size = Size::find($id);
        if ( !is_null($size)) {
            return view('backend.pages.size.edit', compact('size'));
            
        }
        else{

            return redirect()->route('size.manage');

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
           'size' => 'required|max: 255',
        ],
        [
          'size.required' => 'Please Insert The size Name',  
        ]);

        $size =Size::find($id);
        $size->size         = $request->size;
        
        $size->status                = $request->status;
       


        $size->save();
        return redirect()->route('size.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $size = Size::find($id);
        if (!is_null( $size ))
         {
          
            $size->delete(); 
            return redirect()->route('size.manage'); 
        }
        else{
            return redirect()->route('size.manage');

        }
    }
}
