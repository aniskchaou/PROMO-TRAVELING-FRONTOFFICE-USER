    @extends('layouts.admin') 
@section('content') 	<form method="post" action="{{route('destination.update',$cat->id)}}">  
				{{ csrf_field() }}     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Description</label>  
					<input type="text" class="form-control" name="description" value="{{$cat->description}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">image</label>  
					<input type="text" class="form-control" name="image" value="{{$cat->image}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Weather</label>  
					<input type="text" class="form-control" name="weather" value="{{$cat->weather}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Hotel</label>  
					<input type="text" class="form-control" name="hotel" value="{{$cat->hotel}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Transportation</label>  
					<input type="text" class="form-control" name="transportation" value="{{$cat->transportation}}">  
				</div>  

				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  @endsection