@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('subject.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row float-right">
					
				</div>
				<form action="{{ route('subject.update',$subject->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" value="{{$subject->name}}">
						
					</div>
					<div class="form-group">
						<label for="academicyear_id">Select Grade</label>
						<select name="academicyear_id" id="academicyear_id" class="form-control">
							@foreach($grades as $row)
							<option value="{{$row->id}}" @if($subject->academicyear_id == $row->id) {{'selected'}}@endif>{{$row->academicyear}}</option>
							@endforeach
						</select>
					</div>
					<input type="submit" name="submit" value="Update" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection