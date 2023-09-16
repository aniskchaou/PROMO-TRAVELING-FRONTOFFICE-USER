<?php

namespace App\Http\Controllers;
use App\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $destinations = Destination::all();  
  
        return view('admin.pages.destination.index', compact('destinations'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.destination.create');  
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

  
        $cat = new Destination;  
           $cat->name =  $request->get('name');  
        $cat->description =  $request->get('description');  
        $cat->image =  $request->get('image');  
        $cat->weather =  $request->get('weather');  
        $cat->hotel =  $request->get('hotel');  
        $cat->transportation =  $request->get('transportation');  
        $cat->save(); 
        return redirect('destination/index');
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
        $cat= Destination::find($id);  
     return view('admin.pages.destination.edit', compact('cat'));  
        
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

  
        $cat = Destination::find($id);  
        $cat->name =  $request->get('name');  
        $cat->description =  $request->get('description');  
        $cat->image =  $request->get('image');  
        $cat->weather =  $request->get('weather');  
        $cat->hotel =  $request->get('hotel');  
        $cat->transportation =  $request->get('transportation');  
        $cat->save();
        return redirect('destination/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Destination::find($id);  
        $cat->delete(); 
        return redirect('destination/index');
    }
}
