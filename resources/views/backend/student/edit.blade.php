@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('student.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="{{ route('student.store')}}" method="POST" enctype="multipart/form-data">

					@csrf
					@method('PUT')
					<div class="form-group  ">
						<label for="name" class="col-form-label"> Name </label>
				    	
				    	<div>
				      		<input type="text" class="form-control" id="name"  name="name" value="{{$student->name}}">
				      		
				    	</div>
					</div>

					<div class="form-group">
						<label class="form-control-label">Choose Avatar</label>
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Avatar</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Avatar</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<img src="{{asset ($student->avatar)}}" class="img-fluid d-block" width="100px">
								<input type="hidden" name="avatar" value="{{$student->avatar}}">
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								<div class="form-group">
									<div class="mt-3">
										<input type="file" id="avatar" name="newavatar" class="form-control-file">	
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group  ">
						<label for="phone" class=" col-form-label"> Phone </label>
				    	
				    	<div>
				      		<input type="number" name="phone" class="form-control" id="phone" value="{{$student->phone}}">
				      		
				    	</div>
					</div>

					<div class="form-group  ">
						<label for="dob" class=" col-form-label"> Date of Birth </label>
				    	
				    	<div>
				      		<input type="date" name="dob" class="form-control" id="dob" value="{{$student->dob}}">
				      		
				    	</div>
					</div>				

					<div class="form-group">
						<label for="address" class=" col-form-label"> Address </label>
				    	
				    	<div>
				      		<textarea class="form-control" name="address" id="address">
				      			{{$student->address}}
				      		</textarea>				      		
				    	</div>
				    </div>

				    <div class="form-group">
				    	<label for="room_id">Room</label>
				    <div>
				    	<select class="form-control" name="room_id" id="room_id">
								@foreach($rooms as $row)
								<option value="{{$row->id}}" @if($student->room_id == $row->id) {{'selected'}}@endif>{{$row->name}}</option>
								@endforeach
						</select>
						</div>		
					</div>
					<div class="form-group">
				    	<label for="room_id">Guardian</label>
				    <div>
				    	<input type="text" name="user_id" value="8">
					</div>		
					</div>
					
					<input type="submit" name="submit" value="submit" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection