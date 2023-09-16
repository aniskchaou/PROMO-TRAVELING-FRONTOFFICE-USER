
@extends('layouts.admin') 
@section('content')  

<div class="pagetitle">
      <!-- <h1>Blogs</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/dashboard')}}"">Home</a></li>
          <li class="breadcrumb-item active">Blogs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

    

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blogs</h5>

                  <a class="btn btn-primary text-xs" href="{{ route('blog.create')}}" >
                  <i class="bi bi-plus"></i> Create
                </a> 
             
              <table class="table">
          <thead class=" text-primary">
            <tr>
              <th>Image</th>
            <th>
               Title
            </th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($blogs as $blog)  
            <tr>
              <td>{{$blog->image}}</td>  
              <td>{{$blog->title}}</td>  
              <td >  
                
                <a class="btn btn-success text-xs" href="{{ route('blog.edit', $blog->id)}}" >
                  <i class="bi bi-pencil-fill"></i> Edit
</a>  
                <a class="btn btn-danger text-xs" href="{{ route('blog.destroy', $blog->id)}}" ><i class="bi bi-trash"></i> Delete</a>
              </td>  
            </tr>  
            @endforeach
        </tbody>
      </table>
              

            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection 