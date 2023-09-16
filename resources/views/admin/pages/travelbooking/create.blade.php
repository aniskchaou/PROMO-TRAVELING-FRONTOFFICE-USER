    @extends('layouts.admin') 
@section('content') <form method="post" action="{{ route('travelbooking.store') }}">  
					{{ csrf_field() }}     
					<div class="form-group">      
						<label for="first_name">package</label>  
						<input type="text" class="form-control" name="package"/>  
					</div>  
					  

                    <div class="form-group">      
						<label for="first_name">traveller</label>  
						<input type="text" class="form-control" name="traveller"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">payment</label>  
						<input type="text" class="form-control" name="payment"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">status</label>  
						<input type="text" class="form-control" name="status"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">cost</label>  
						<input type="text" class="form-control" name="cost"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">adult</label>  
						<input type="text" class="form-control" name="adult"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">child</label>  
						<input type="text" class="form-control" name="child"/>  
					</div>  

                    <div class="form-group">      
						<label for="first_name">hotel</label>  
						<input type="text" class="form-control" name="hotel"/>  
					</div>  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>  	@endsection