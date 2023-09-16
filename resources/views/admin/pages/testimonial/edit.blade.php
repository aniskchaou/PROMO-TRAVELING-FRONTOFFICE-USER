	    @extends('layouts.admin') 
@section('content') <form method="post" action="{{route('testimonial.update',$cat->id)}}">  
				{{ csrf_field() }}  
				<div class="form-group">      
					<label for="first_name">Size</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">review</label>  
					<input type="text" class="form-control" name="review" value="{{$cat->review}}">  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  @endsection