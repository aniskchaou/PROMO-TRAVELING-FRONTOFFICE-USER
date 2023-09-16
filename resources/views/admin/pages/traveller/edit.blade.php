    @extends('layouts.admin') 
@section('content') 	<form method="post" action="{{route('traveller.update',$cat->id)}}">  
				{{ csrf_field() }}   
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Telephone</label>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Country</label>  
					<input type="text" class="form-control" name="country" value="{{$cat->country}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Email</label>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">City</label>  
					<input type="text" class="form-control" name="city" value="{{$cat->city}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Address</label>  
					<input type="text" class="form-control" name="address" value="{{$cat->address}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Status</label>  
					<input type="text" class="form-control" name="status" value="{{$cat->status}}">  
				</div>  



				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
@endsection