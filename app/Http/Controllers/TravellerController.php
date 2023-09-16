<?php

namespace App\Http\Controllers;
use App\Traveller;
use Illuminate\Http\Request;

class TravellerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $travellers = Traveller::all();  
  
        return view('admin.pages.traveller.index', compact('travellers'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.traveller.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo("hi");
         $request->validate([  
             'name'=>'required',   
        ]);  
        			

  
        $cat = new Traveller;  
            $cat->name =$request->get('name');
    $cat->telephone =$request->get('telephone');
    $cat->country =$request->get('country');
    $cat->email =$request->get('email');
    $cat->city =$request->get('city');
    $cat->address =$request->get('address');
    $cat->status =$request->get('status');
        $cat->save(); 
        return redirect('traveller/index');
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
        $cat= Traveller::find($id);  
     return view('admin.pages.traveller.edit', compact('cat'));  
        
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
  
        $cat = Traveller::find($id);  
                    $cat->name =$request->get('name');
    $cat->telephone =$request->get('telephone');
    $cat->country =$request->get('country');
    $cat->email =$request->get('email');
    $cat->city =$request->get('city');
    $cat->address =$request->get('address');
    $cat->status =$request->get('status');  
        $cat->save();
        return redirect('traveller/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Traveller::find($id);  
        $cat->delete(); 
        return redirect('traveller/index');
    }
}
