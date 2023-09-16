    @extends('layouts.admin') 
@section('content')      
      
    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Destinations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      
       <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Destinations</h5>
                <a class="btn btn-primary text-xs" href="{{ route('destination.create')}}" >
                  <i class="bi bi-plus"></i> Create
                </a> 

              <table class="table datatable">
          <thead class=" text-primary">
            <tr>
               <th>
               Image
            </th>
            <th>
               Name
            </th>
            <th>Transportation</th>
            <th></th>
          </tr></thead>
          <tbody>
            @foreach($destinations as $destination)  
            <tr>
              <td><img href="{{$destination->image}}" height="50" width="50" /></td>  
              <td>{{$destination->name}}</td> 
              <td>{{$destination->transportation}}</td>
              <td >  
                
                <a class="btn btn-success text-xs" href="{{ route('destination.edit', $destination->id)}}" >
                  <i class="bi bi-pencil-fill"></i> Edit
                </a>  
                <a class="btn btn-danger text-xs" href="{{ route('destination.destroy', $destination->id)}}" > <i class="bi bi-trash"></i> Delete</a>
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