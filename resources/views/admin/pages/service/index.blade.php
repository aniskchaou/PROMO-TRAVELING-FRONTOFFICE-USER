     @extends('layouts.admin') 
@section('content')    
      
      
       <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      
       <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Services</h5>

                <a class="btn btn-primary text-xs" href="{{ route('service.create')}}" >
                  <i class="bi bi-plus"></i> Create
                </a> 
              

               <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
               Name
            </th>
            <th></th>
          </tr></thead>
          <tbody>
            @foreach($services as $service)  
            <tr >  
              <td>{{$service->title}}</td>  
              <td >  
                
                <a class="btn btn-success text-xs" href="{{ route('service.edit', $service->id)}}" ><i class="bi bi-pencil-fill"></i> 
                  Edit
                </a>  
                <a class="btn btn-danger text-xs" href="{{ route('service.destroy', $service->id)}}" ><i class="bi bi-trash"></i>  Delete</a>
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