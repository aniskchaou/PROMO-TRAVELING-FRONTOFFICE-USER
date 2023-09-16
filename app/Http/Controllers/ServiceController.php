<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $services = Service::all();  
  
        return view('admin.pages.service.index', compact('services'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.service.create');  
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
            'title'=>'required',  
        ]);  

  
        $cat = new Service;  
               $cat->title =  $request->get('title');  
        $cat->image =  $request->get('image');  
        $cat->text =  $request->get('text');  
        $cat->save(); 
        return redirect('service/index');
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
        $cat= Service::find($id);  
     return view('admin.pages.service.edit', compact('cat'));  
        
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
         /* $request->validate([  
            'title'=>'required',  
             
        ]);   */
  
        $cat = Service::find($id);  
        $cat->title =  $request->get('title');  
        $cat->image =  $request->get('image');  
        $cat->text =  $request->get('text');  
        $cat->save();
        return redirect('service/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Service::find($id);  
        $cat->delete(); 
        return redirect('service/index');
    }
}
