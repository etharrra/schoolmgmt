@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('timetable.index')}}" class="btn btn-block btn-outline-success">back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row float-right">
					
				</div>
				<form action="{{ route('timetable.store')}}" method="POST">
					@csrf
					<div class="form-group">
						
						<input type="text" class="form-control" id="timetablest" name="time_start" placeholder="Enter Start Time">
						
					</div>
					<div class="form-group">
						
						<input type="text" class="form-control" id="timetableet" name="time_finish" placeholder="Enter End Time">
						
					</div>
					<div class="form-group">
						
						<input type="text" class="form-control" id="timetable" name="day" placeholder="Enter Day">
						
					</div>
					<div class="form-group">
						<label for="room_id">Select Room</label>
						<select name="room_id" id="room_id" class="form-control">
							<option><---Select Room---></option>
							@foreach($rooms as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
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