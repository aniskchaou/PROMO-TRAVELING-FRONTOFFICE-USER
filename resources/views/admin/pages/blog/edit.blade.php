    @extends('layouts.admin') 
@section('content')  
<form method="post" action="{{route('blog.update',$cat->id)}}">  
	{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">Title</label>  
					<input type="text" class="form-control" name="title" value="{{$cat->title}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Body</label>  
					<input type="text" class="form-control" name="body" value="{{$cat->body}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Image</label>  
					<input type="text" class="form-control" name="image" value="{{$cat->image}}">  
				</div>  

				
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>   

	@endsection