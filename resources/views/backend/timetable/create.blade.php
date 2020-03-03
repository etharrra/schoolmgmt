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
						<label class="form-control-label" for="day">Choose Day</label>						
						<select class="form-control" id="day" name="day">
							<option value="monday">Monday</option>
							<option value="tuesday">Tuesday</option>
							<option value="wednesday">Wednesday</option>
							<option value="thursday">Thursday</option>
							<option value="friday">Friday</option>
							<option value="saturday">Saturday</option>
							<option value="suday">Sunday</option>

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
							<option><---Select Room---></option>
							
						</select>
					</div>
					<div class="form-group">
						<label for="subject_id">Select Subject</label>
						<select name="subject_id" id="subject_id" class="form-control">
							<option><---Select Subject---></option>
							
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
   					// console.log(v.subject_id);
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