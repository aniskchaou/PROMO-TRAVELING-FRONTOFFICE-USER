    @extends('layouts.admin') 
@section('content') 	<form method="post" action="{{route('service.update',$cat->id)}}">  
				{{ csrf_field() }}     
				<div class="form-group">      
					<label for="first_name">title</label>  
					<input type="text" class="form-control" name="title" value="{{$cat->title}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">image</label>  
					<input type="text" class="form-control" name="image" value="{{$cat->image}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">text</label>  
					<input type="text" class="form-control" name="text" value="{{$cat->text}}">  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>   @endsection