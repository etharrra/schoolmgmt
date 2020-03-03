@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('timetable.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row float-right">
					
				</div>
				<form action="{{ route('timetable.update',$timetable->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label class="form-control-label" for="timetablest">Time Start</label>
						
						<input type="text" class="form-control" id="timetablest" name="time_start" value="{{$timetable->time_start}}">
						
					</div>
					<div class="form-group">
						<label class="form-control-label" for="timetableet">Time Start</label>
						
						<input type="text" class="form-control" id="timetableet" name="time_finish" value="{{$timetable->time_finish}}">
						
					</div>
					<div class="form-group">
						<label class="form-control-label" for="day">Choose Day</label>						
						<select class="form-control" id="day" name="day">
							<option value="monday" @if($timetable->day == "monday") {{'selected'}}@endif>Monday</option>
							<option value="tuesday" @if($timetable->day == "tuesday") {{'selected'}}@endif>Tuesday</option>
							<option value="wednesday" @if($timetable->day == "wednesday") {{'selected'}}@endif>Wednesday</option>
							<option value="thursday" @if($timetable->day == "thursday") {{'selected'}}@endif>Thursday</option>
							<option value="friday" @if($timetable->day == "friday") {{'selected'}}@endif>Friday</option>
							<option value="saturday" @if($timetable->day == "saturday") {{'selected'}}@endif>Saturday</option>
							<option value="suday" @if($timetable->day == "suday") {{'selected'}}@endif>Sunday</option>

						</select>
					</div>
					<div class="form-group">
						<label for="grade">Select Grade</label>
						<select name="grade" id="grade" class="form-control">
							<option selected=""><---Select Grade---></option>
							@foreach($grades as $grade)
							<option value="{{$grade->id}}" data-id="{{$grade->id}}">{{$grade->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="room_id">Select Room</label>
						<select name="room_id" id="room_id" class="form-control">
							<option value="{{$timetable->room_id}}" data-id="{{$timetable->room_id}}">{{$timetable->room->name}}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="subject_id">Select Subject</label>
						<select name="subject_id" id="subject_id" class="form-control">
							<option value="{{$timetable->subject_id}}">{{$timetable->subject->name}}</option>
							
						</select>
					</div>
					<input type="submit" name="submit" value="submit" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    	$('#grade').change(
   		function() {
   			// alert("ok");
   			var id = $( 'option:selected', this ).data( 'id' );
   			//alert(id);
   			$.get('/getroom/'+id, function(res) {
   				$room = res;
   				var html;
   				$.each($room, function(i, v) {
   					// console.log(v.name);
   					// console.log(v.id);
   					var rname = v.name;
   					var rid = v.id;
   					html += `<option value="${rid}">${rname}</option>`;

   				});
   				$('#room_id').html(html);
   			});

   			$.get('/getsubject/'+id, function(res) {
   				$subject = res;
   				var html;
   				$.each($subject, function(i, v) {
   					// console.log(v.subname);
   					// console.log(v.id);
   					var sname = v.subname;
   					var sid = v.subject_id;
   					html += `<option value="${sid}">${sname}</option>`;

   				});
   				$('#subject_id').html(html);
   			});
   		});
    
});
</script>
@endsection