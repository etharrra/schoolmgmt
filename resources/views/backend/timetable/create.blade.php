@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Timetable</h6>
				</div>
				<div class="col-md-2 col-sm-4 col-lg-2">
					<a href="{{route('timetable.index')}}" class="btn btn-block btn-outline-success">back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('timetable.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<label for="time_start" class="form-control-label">Time Start</label>
							<input type="text" class="form-control" id="timetablest" name="time_start" placeholder="Enter Start Time">
							@error('time_start')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="time_start" class="form-control-label">Time Finish</label>
							<input type="text" class="form-control" id="timetableet" name="time_finish" placeholder="Enter End Time">
							@error('time_finish')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="timetable" class="form-control-label">Day</label>
							<input type="text" class="form-control" id="timetable" name="day" placeholder="Enter Day">
							@error('day')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
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
	</div>
</div>
		@endsection