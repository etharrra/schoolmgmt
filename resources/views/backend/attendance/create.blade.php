@extends('backendtemplate')
@section('content')

<div class="container-fluid mt-5 pt-5">
	<div class="row">
		<div class="col-md-10 col-sm-8 col-lg-10">

		</div>

	</div>
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
				<form action="{{ route('attendance.store')}}" method="POST" enctype="multipart/form-data">

					@csrf
					<div class="form-group  ">
						<label for="date" class="col-form-label"> Date </label>

						<div>
							<input type="date" class="form-control" id="date"  name="date">

						</div>
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
							<label for="room">Select Room</label>
							<select name="room" id="room" class="form-control">
								<option><---Select Room---></option>

							</select>
						</div>

						<div class="form-group">							<label for="student">Select Student</label>
							<select class="form-control" name="student" id="student">

							</select>
						</div>
						<div class="form-group">
							<h4>Attendance</h4>
							<div>
								<label for="present" class="form-control-label">Present</label>
								<input type="radio" name="status" value="present" id="present">

								<label for="absent" class="form-control-label">Absent</label>
								<input type="radio" name="status" value="absent" id="absent">
							</div>
						</div>
						<div class="form-group" id="dinput" style="display: hidden;">
							<label class="form-control-label" for="description">Reason For Absent</label>
							<div>
								<input type="text" name="description" class="form-control" id="description">
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
	$(document).ready(function() {
		$('#dinput').hide();
		 $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    $('.js-example-basic-multiple').select2();
   	$('#grade').change(
   		function() {

   			var id = $( 'option:selected', this ).data( 'id' );
   			//alert(id);
   			$.get('/getroom/'+id, function(res) {
   				$room = res;
   				var html;
   				$.each($room, function(i, v) {
   					//console.log(v.name);
   					//console.log(v.id);
   					var rname = v.name;
   					var rid = v.id;
   					html += `
   					<option value="${v.id}" data-id="${v.id}">${v.name}</option>`;

   				});
   				$('#room').html(html);

   			});
   	});

   	$('#room').change(
   		function() {

   			var id = $( 'option:selected', this ).data( 'id' );
   			//alert(id);
   			$.get('/getstudent/'+id, function(res) {
   				$student = res;
   				var html;
   				$.each($student, function(i, v) {
   					//console.log(v.name);
   					//console.log(v.id);
   					var rname = v.name;
   					var rid = v.id;
   					html += `
   					<option value="${v.id}" data-id="${v.id}">${v.name}</option>`;

   				});
   				$('#student').html(html);

   			});
   	}); 
   	$('#present').click(
   		function(event) {
   		$('#dinput').hide();
   	});
   	$('#absent').click(
   		function(event) {
   		$('#dinput').show('slow');
   	});


});
</script>

@endsection