     @extends('layouts.admin') 
@section('content')    
   
      

      <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      
       <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              

               <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
               Name
            </th>
            <th></th>
          </tr></thead>
          <tbody>
            @foreach($sliders as $slider)  
            <tr >  
              <td>{{$slider->title}}</td>  
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('slider.edit', $slider->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('slider.destroy', $slider->id)}}" >Delete</a>
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