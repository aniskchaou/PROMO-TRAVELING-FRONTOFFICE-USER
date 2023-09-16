    @extends('layouts.admin') 
@section('content') 	<form method="post" action="{{route('slider.update',$cat->id)}}">  
				{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">title</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">image</label><br/><br/>  
					<input type="text" class="form-control" name="image" value="{{$cat->image}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">text</label><br/><br/>  
					<input type="text" class="form-control" name="text" value="{{$cat->text}}"><br/><br/>  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>    $table->increments('id');
    $table->string('title');
    $table->string('image');
    $table->string('text');	@endsection