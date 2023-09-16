<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $packages = Package::all();  
  
        return view('admin.pages.package.index', compact('packages'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.package.create');  
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

        $cat = new Package;  
          $cat->name =  $request->get('name');   
        $cat->description =  $request->get('description');  
        $cat->location =  $request->get('location');  
        $cat->start =  $request->get('start');  
        $cat->end =  $request->get('end');  
        $cat->price =  $request->get('price');  
        $cat->image =  $request->get('image');  
        $cat->video =  $request->get('video');  
        $cat->save(); 
        return redirect('package/index');
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
        $cat= Package::find($id);  
     return view('admin.pages.package.edit', compact('cat'));  
        
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
       /*   $request->validate([  
            'name'=>'required',  
             
        ]);  */ 

        $cat = Package::find($id);  
        $cat->name =  $request->get('name');   
        $cat->description =  $request->get('description');  
        $cat->location =  $request->get('location');  
        $cat->start =  $request->get('start');  
        $cat->end =  $request->get('end');  
        $cat->price =  $request->get('price');  
        $cat->image =  $request->get('image');  
        $cat->video =  $request->get('video');  
        $cat->save();
        return redirect('package/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Package::find($id);  
        $cat->delete(); 
        return redirect('package/index');
    }
}
