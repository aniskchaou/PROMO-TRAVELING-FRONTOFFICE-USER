    @extends('layouts.admin') 
@section('content') 	<form method="post" action="{{route('subscriber.update',$cat->id)}}">  
				{{ csrf_field() }}     
				<div class="form-group">      
					<label for="first_name">name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>   @endsection