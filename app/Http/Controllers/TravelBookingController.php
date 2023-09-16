<?php

namespace App\Http\Controllers;
use App\TravelBooking;
use Illuminate\Http\Request;

class TravelBookingController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $travelbookings = TravelBooking::all();  
  
        return view('admin.pages.travelbooking.index', compact('travelbookings'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.travelbooking.create');  
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
            'package'=>'required',  
        ]);  

  
        $cat = new TravelBooking;  
        $cat->package =  $request->get('package');
        $cat->traveller =  $request->get('traveller');
        $cat->date =  $request->get('date');
        $cat->payment =  $request->get('payment');
        $cat->status =  $request->get('status');
        $cat->cost =  $request->get('cost');
        $cat->adult =  $request->get('adult');
        $cat->child =  $request->get('child');
        $cat->hotel =  $request->get('hotel');

        $cat->save(); 
        return redirect('travelbooking/index');
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
        $cat= TravelBooking::find($id);  
     return view('admin.pages.travelbooking.edit', compact('cat'));  
        
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
            'package'=>'required',  
             
        ]);  
  
        $cat = TravelBooking::find($id);  
            $cat->package =  $request->get('package');
        $cat->traveller =  $request->get('traveller');
        $cat->date =  $request->get('date');
        $cat->payment =  $request->get('payment');
        $cat->status =  $request->get('status');
        $cat->cost =  $request->get('cost');
        $cat->adult =  $request->get('adult');
        $cat->child =  $request->get('child');
        $cat->hotel =  $request->get('hotel');
    
        $cat->save();
        return redirect('travelbooking/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=TravelBooking::find($id);  
        $cat->delete(); 
        return redirect('travelbooking/index');
    }
}
