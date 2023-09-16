 	    @extends('layouts.admin') 
@section('content') <form method="post" action="{{route('package.update',$cat->id)}}">  
				{{ csrf_field() }}     
				<div class="form-group">      
					<label for="first_name">name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">description</label>  
					<input type="text" class="form-control" name="description" value="{{$cat->description}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">location</label>  
					<input type="text" class="form-control" name="location" value="{{$cat->location}}">  
				</div>  

        <div class="form-group">      
					<label for="first_name">start</label>  
					<input type="text" class="form-control" name="start" value="{{$cat->start}}">  
				</div>  

        <div class="form-group">      
					<label for="first_name">end</label>  
					<input type="text" class="form-control" name="end" value="{{$cat->end}}">  
				</div>  

        <div class="form-group">      
					<label for="first_name">price</label>  
					<input type="text" class="form-control" name="price" value="{{$cat->price}}">  
				</div>  

        <div class="form-group">      
					<label for="first_name">image</label>  
					<input type="text" class="form-control" name="image" value="{{$cat->image}}">  
				</div>  

        <div class="form-group">      
					<label for="first_name">video</label>  
					<input type="text" class="form-control" name="video" value="{{$cat->video}}">  
				</div>  


				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  @endsection
