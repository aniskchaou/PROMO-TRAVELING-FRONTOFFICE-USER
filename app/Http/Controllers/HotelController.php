<?php

namespace App\Http\Controllers;
use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $hotels = Hotel::all();  
  
        return view('admin.pages.hotel.index', compact('hotels'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.hotel.create');  
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
            'name'=>'required',  
        ]);  
  
        $cat = new Hotel;  
        $cat->name =  $request->get('name');
        $cat->save(); 
        return redirect('hotel/index');
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
        $cat= Hotel::find($id);  
     return view('admin.pages.hotel.edit', compact('cat'));  
        
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
         $request->validate([  
            'name'=>'required',  
             
        ]);  
  
        $cat = Hotel::find($id);  
        $cat->name =  $request->get('name');    
        $cat->save();
        return redirect('hotel/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Hotel::find($id);  
        $cat->delete(); 
        return redirect('hotel/index');
    }
}
