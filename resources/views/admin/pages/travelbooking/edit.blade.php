	    @extends('layouts.admin') 
@section('content') <form method="post" action="{{route('travelbooking.update',$cat->id)}}">  
				{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">package</label>  
					<input type="text" class="form-control" name="package" value="{{$cat->package}}">  
				</div>  
               
                <div class="form-group">      
					<label for="first_name">traveller</label>  
					<input type="text" class="form-control" name="traveller" value="{{$cat->traveller}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">date</label>  
					<input type="text" class="form-control" name="date" value="{{$cat->date}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">payment</label>  
					<input type="text" class="form-control" name="payment" value="{{$cat->payment}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">status</label>  
					<input type="text" class="form-control" name="status" value="{{$cat->status}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">cost</label>  
					<input type="text" class="form-control" name="cost" value="{{$cat->cost}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">adult</label>  
					<input type="text" class="form-control" name="adult" value="{{$cat->adult}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">child</label>  
					<input type="text" class="form-control" name="child" value="{{$cat->child}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">hotel</label>  
					<input type="text" class="form-control" name="hotel" value="{{$cat->hotel}}">  
				</div>  

				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form> 	@endsection