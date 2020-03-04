@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Student</h6>
				</div>
				<div class="col-md-2 col-sm-4 col-lg-2">
					<a href="{{route('student.index')}}" class="btn btn-block btn-outline-success">back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('student.store')}}" method="POST" enctype="multipart/form-data">

						@csrf
						<div class="form-group  ">
							<label for="name" class="col-form-label"> Name </label>

							<div>
								<input type="text" class="form-control" id="name"  name="name">
								@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="form-group">
							<label for="avatar" class="form-control-label"> Profile</label>

							<div>
								<input type="file" id="avatar" name="avatar" class="form-control-file">	
								@error('avartar')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="form-group  ">
							<label for="phone" class=" col-form-label"> Phone </label>

							<div>
								<input type="number" name="phone" class="form-control" id="phone" >
								@error('phone')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="form-group  ">
							<label for="dob" class=" col-form-label"> Date of Birth </label>

							<div>
								<input type="date" name="dob" class="form-control" id="dob" >
								@error('dob')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>				

						<div class="form-group">
							<label for="address" class=" col-form-label"> Address </label>

							<div>
								<textarea class="form-control" name="address" id="address">	
								</textarea>
								@error('address')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror				      		
							</div>
						</div>
						


				    <div class="form-group">
				    	<label for="grade">Choose Room</label>
				    	<div class="row">
				    		<div class="col-6">
				    			<select class="form-control" name="grade" id="grade">
				    				<option><---Select Grade---></option>
				    				@foreach($grades as $row)
				    				<option value="{{$row->id}}" data-id="{{$row->id}}">{{$row->name}}</option>
				    				@endforeach
				    			</select>
				    		</div>
				    		<div class="col-6">
				    			<select class="form-control" name="room_id" id="room_id">
				    				
				    			</select>
				    		</div>
						</div>		
					</div>
					<div class="form-group">
				    	<label for="guardianchoose">Guardian</label>
					    <div class="row">
					    		<div class="col-6">
					    			<input type="email" id="guardianchoose" class="form-control ">
					    		</div>

					    		<div class="col-6">
					    			<select name="user_id" class="form-control" id="user_id">

					    			</select>
					    		</div>
					    </div>
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
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    	});
	$('#grade').change(
   		function() {
   			// alert("OK");
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
   				$('#room_id').html(html);

   			});
   	});	
    $('#guardianchoose').change(
    	function() {
    	var email = $('#guardianchoose').val();
    	//alert(email);
    	$.get('/getguardian/'+email, 
    		function(res) {
    		$guardian = res;
    		var html;
    		$.each($guardian, function(i, v) {
   					// console.log(v.name);
   					// console.log(v.id);
   					var rname = v.name;
   					var rid = v.id;
   					html += `
   					<option value="${v.id}" data-id="${v.id}">${v.name}</option>`;

			});
			$('#user_id').html(html);
    	});
    });	
	});
</script>

@endsection