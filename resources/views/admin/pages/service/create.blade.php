    @extends('layouts.admin') 
@section('content') <form method="post" action="{{ route('service.store') }}">  
					{{ csrf_field() }}   
					<div class="form-group">      
						<label for="first_name">title</label>  
						<input type="text" class="form-control" name="title"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">image</label>  
						<input type="text" class="form-control" name="image"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">text</label>  
						<input type="text" class="form-control" name="text"/>  
					</div>  

					
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>   @endsection