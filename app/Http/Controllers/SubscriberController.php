<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subscribers = Subscriber::all();  
  
        return view('admin.pages.subscriber.index', compact('subscribers'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.subscriber.create');  
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
  
        $cat = new Subscriber;  
        $cat->name =  $request->get('name');
        $cat->save(); 
        return redirect('subscriber/index');
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
        $cat= Subscriber::find($id);  
     return view('admin.pages.subscriber.edit', compact('cat'));  
        
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
  
        $cat = Subscriber::find($id);  
        $cat->name =  $request->get('name');    
        $cat->save();
        return redirect('subscriber/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Subscriber::find($id);  
        $cat->delete(); 
        return redirect('subscriber/index');
    }
}
