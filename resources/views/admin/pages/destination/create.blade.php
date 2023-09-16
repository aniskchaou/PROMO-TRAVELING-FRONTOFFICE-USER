    @extends('layouts.admin') 
@section('content') <form method="post" action="{{ route('destination.store') }}">  
					{{ csrf_field() }}    
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">description</label>  
						<input type="text" class="form-control" name="description"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">image</label>  
						<input type="text" class="form-control" name="image"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">weather</label>  
						<input type="text" class="form-control" name="weather"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">hotel</label>  
						<input type="text" class="form-control" name="hotel"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">transportation</label>  
						<input type="text" class="form-control" name="transportation"/>  
					</div>  

					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>   @endsection