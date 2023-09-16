<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $blogs = Blog::all();  
  
        return view('blog.blog', compact('blogs'));  
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminindex()
    {
         $blogs = Blog::all();  
  
        return view('admin.pages.blog.index', compact('blogs'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.blog.create');  
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
            'body'=>'required',
            'image'=>'required', 
        ]);  


  
        $cat = new Blog;  
        $cat->title =  $request->get('title');
        $cat->body =  $request->get('body');
        $cat->image =  $request->get('image');
        $cat->save(); 
        return redirect('blog/index');
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
        $cat= Blog::find($id);  
     return view('admin.pages.blog.edit', compact('cat'));  
        
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
            'title'=>'required', 
            'body'=>'required',
            'image'=>'required', 
        ]);  

  
        $cat = Blog::find($id);  
           $cat->title =  $request->get('title');
        $cat->body =  $request->get('body');
        $cat->image =  $request->get('image');
            
        $cat->save();
        return redirect('blog/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Blog::find($id);  
        $cat->delete(); 
        return redirect('blog/index');
    }
}
