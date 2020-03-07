@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">

					<h6 class="m-0 font-weight-bold text-primary">Attendance</h6>
				</div>

				<div class="col-2">

					<a href="{{route('attendance.index')}}" class="btn btn-block btn-outline-success mb-3">Back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			
			<form action="{{ route('attendance.update',$attendance->id)}}" method="POST" enctype="multipart/form-data">

				@csrf
				@method('PUT')
				<div class="form-group  ">
					<label for="date" class="col-form-label"> Date </label>

					<div>
						<input type="date" class="form-control" id="date"  name="date" value="{{$attendance->date}}">

					</div>
				</div>
				

					<!-- <div class="form-group">
						<label for="room">Select Room</label>
						<select name="room" id="room" class="form-control">


						</select>
					</div> -->

					<div class="form-group">								
						<select class="form-control" name="student" id="student">
							<option value="{{$attendance->student_id}}">{{$attendance->student->name}}</option>
						</select>
					</div>
					<div class="form-group">
						<h4>Attendance</h4>
						<div>
							<label for="present" class="form-control-label">Present</label>
							<input type="radio" name="status" value="present" id="present" @if($attendance->status == "present") {{'checked'}} @endif>

							<label for="absent" class="form-control-label">Absent</label>
							<input type="radio" name="status" value="absent" id="absent" @if($attendance->status == "absent") {{'checked'}} @endif>
						</div>
					</div>
					<div class="form-group" id="dinput">
						<label class="form-control-label" for="description">Reason For Absent</label>
						<div>
							<input type="text" name="description" class="form-control" id="description" 
							value="@if($attendance->status == 'absent'){{$attendance->description}} @else{{''}} @endif">
						</div>
					</div>
					<input type="submit" name="submit" value="submit" class="btn btn-primary">


				</form>
			</div>
		</div>
	</div> 
</div>	
@endsection

@section('script')
<script type="text/javascript">
	
</script>

@endsection