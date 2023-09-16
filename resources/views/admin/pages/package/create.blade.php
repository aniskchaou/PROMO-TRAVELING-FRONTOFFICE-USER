    @extends('layouts.admin') 
@section('content') 



<form method="post" action="{{ route('package.store') }}">  
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
						<label for="first_name">location</label>  
						<input type="text" class="form-control" name="location"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">start</label>  
						<input type="text" class="form-control" name="start"/>  
					</div>  
                    <div class="form-group">      
						<label for="first_name">end</label>  
						<input type="text" class="form-control" name="end"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">price</label>  
						<input type="text" class="form-control" name="price"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">image</label>  
						<input type="text" class="form-control" name="image"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">video</label>  
						<input type="text" class="form-control" name="video"/>  
					</div>  

					<button type="submit" class="btn btn-primary" >Create </button>  
				</form> 
				@endsection