    @extends('layouts.admin') 
@section('content') <form method="post" action="{{ route('slider.store') }}">  
					{{ csrf_field() }}     
					<div class="form-group">      
						<label for="first_name">title</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">image</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">text</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>  
					<br/>  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>   $table->increments('id');
    $table->string('title');
    $table->string('image');
    $table->string('text');	@endsection