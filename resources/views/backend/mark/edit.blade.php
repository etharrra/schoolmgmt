@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('mark.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="{{ route('mark.update',$mark->id)}}" method="POST" enctype="multipart/form-data">

					@csrf
					@method('PUT')
					<div class="form-group  ">
						<label for="mark" class="col-form-label"> Mark </label>
				    	
				    	<div>
				      		<input type="text" class="form-control" id="mark"  name="mark" value="{{$mark->mark}}">
				      		
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="student_id">Student</label>
				    <div>
				    	<select class="form-control" name="student_id" id="student_id">
								@foreach($students as $row)
								<option value="{{$row->id}}" @if($mark->student_id == $row->id) {{'selected'}}@endif>{{$row->name}}</option>
								@endforeach
						</select>
						</div>		
					</div>

					<div class="form-group">
				    	<label for="subject_id">Subject</label>
				    <div>
				    	<select class="form-control" name="subject_id" id="subject_id">
								@foreach($subjects as $row)
								<option value="{{$row->id}}" @if($mark->subject_id == $row->id) {{'selected'}}@endif>{{$row->name}}</option>
								@endforeach
						</select>
						</div>		
					</div>

					<div class="form-group  ">
						<label for="month" class="col-form-label"> Month </label>
				    	
				    	<div>
				      		<select id="month" class="form-control" name="month">
				      			<option value="june" @if($mark->month == "june") {{'selected'}}@endif>June</option>
				      			<option value="july" @if($mark->month == "july") {{'selected'}}@endif>July</option>
				      			<option value="august" @if($mark->month == "august") {{'selected'}}@endif>August</option>
				      			<option value="september" @if($mark->month == "september") {{'selected'}}@endif>September</option>
				      			<option value="october" @if($mark->month == "october") {{'selected'}}@endif>October</option>
				      			<option value="november" @if($mark->month == "november") {{'selected'}}@endif>November</option>
				      			<option value="december" @if($mark->month == "december") {{'selected'}}@endif>December</option>
				      			<option value="january" @if($mark->month == "january") {{'selected'}}@endif>January</option>
				      			<option value="february" @if($mark->month == "february") {{'selected'}}@endif>February</option>
				      		</select>
				      		
				    	</div>
					</div>
					
					<input type="submit" name="submit" value="submit" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection