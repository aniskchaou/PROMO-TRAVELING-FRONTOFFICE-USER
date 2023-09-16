<?php

namespace App\Http\Controllers;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $testimonials = Testimonial::all();  
  
        return view('admin.pages.testimonial.index', compact('testimonials'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.testimonial.create');  
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
  
        $cat = new Testimonial;  
        $cat->name =  $request->get('name');    
        $cat->review =  $request->get('review');   
        $cat->save(); 
        return redirect('testimonial/index');
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
        $cat= Testimonial::find($id);  
     return view('admin.pages.testimonial.edit', compact('cat'));  
        
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
  
        $cat = Testimonial::find($id);  
        $cat->name =  $request->get('name');    
        $cat->review =  $request->get('review');    
        $cat->save();
        return redirect('testimonial/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Testimonial::find($id);  
        $cat->delete(); 
        return redirect('testimonial/index');
    }
}
