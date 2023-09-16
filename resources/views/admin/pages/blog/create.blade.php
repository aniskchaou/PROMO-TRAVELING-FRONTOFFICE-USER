    @extends('layouts.admin') 
@section('content')  
<form method="post" action="{{ route('blog.store') }}" >  
					{{ csrf_field() }}    

					<div class="form-group">      
						<label for="first_name">Title</label>
						<input type="text" class="form-control" name="title"/>
					</div>  

					<div class="form-group">      
						<label for="first_name">Body</label> 
						<input type="text" class="form-control" name="body"/>
					</div>  

					<div class="form-group">      
						<label for="first_name">Image</label> 
						<input type="text" class="form-control" name="image"/> 
					</div>  
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>   


	@endsection