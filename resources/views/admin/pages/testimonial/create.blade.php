    @extends('layouts.admin') 
@section('content') <form method="post" action="{{ route('testimonial.store') }}">  
					{{ csrf_field() }}    
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  
					  

					<div class="form-group">      
						<label for="first_name">review</label>  
						<input type="text" class="form-control" name="review"/>  
					</div>  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form> @endsection