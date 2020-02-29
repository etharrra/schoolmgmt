@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('teacher.index')}}" class="btn btn-block btn-outline-success">back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="{{ route('timetable.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group  ">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
				    	
				    	<div>
				      		<input type="text" class="form-control" id="name"  name="name">
				      		
				    	</div>
					</div>
					
					<div class="form-group  ">
						<label for="avatar" class="col-sm-2 col-form-label"> Click Here to Choose Photo	 </label>
				    	
				    	<div>
				      		<input type="file" id="avatar" name="avatar">
				      		
				    	</div>
					</div>

					<div class="form-group  ">
						<label for="email" class="col-sm-2 col-form-label"> Email </label>
				    	
				    	<div>
				      		<input type="email" name="email" class="form-control" id="email">
				      		
				    	</div>
					</div>

					<div class="form-group  ">
						<label for="phone" class="col-sm-2 col-form-label"> Phone </label>
				    	
				    	<div>
				      		<input type="number" name="phone" class="form-control" id="phone" >
				      		
				    	</div>
					</div>

					<div class="form-group  ">
						<label for="degree" class="col-sm-2 col-form-label"> Education </label>
				    	
				    	<div>
				      		<input type="text" name="education" class="form-control">
				      		
				    	</div>
					</div>

					

					<div class="form-group  {{ $errors->has('address') ? ' has-error' : '' }}">
						<label for="address" class="col-sm-2 col-form-label"> Address </label>
				    	
				    	<div>
				      		<textarea class="form-control" name="address" id="address">
				      			
				      		</textarea>
				      		
				    	</div>
				    </div>
					<div class="form-group">
						<label for="subject_id">Select Subject</label>
						<select name="subject_id" id="subject_id" class="form-control">
							<option><---Select Subject---></option>
							@foreach($subjects as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
					</div>
					<input type="submit" name="submit" value="submit" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection