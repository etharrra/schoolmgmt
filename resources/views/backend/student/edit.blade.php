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
					<form action="{{ route('student.update',$student->id)}}" method="POST" enctype="multipart/form-data">


						@csrf
						@method('PUT')
						<div class="form-group  ">
							<label for="name" class="col-form-label"> Name </label>

							<div>
								<input type="text" class="form-control" id="name"  name="name" value="{{$student->name}}">


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
											<input type="hidden" name="oldavatar" value="{{$student->avatar}}">
										</div>
										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
											<div class="form-group">
												<div class="mt-3">
													<input type="file" id="avatar" name="avatar" class="form-control-file">	

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
														<option value="{{$student->room_id}}">{{$student->room->name}}</option>
													</select>
												</div>
											</div>		
										</div>

										<div class="form-group">
											<label for="guardianchoose">Guardian</label>
											<div class="row">
												<div class="col-6">
													<input type="email" id="guardianchoose" class="form-control " placeholder="Search Guardian with email">
												</div>

												<div class="col-6">
													<select name="user_id" class="form-control" id="user_id">
														<option value="{{$student->user_id}}">{{$student->user->name}}</option>
													</select>
												</div>
											</div>
										</div>

										<input type="submit" name="submit" value="submit" class="btn btn-primary">
						</form>
					</div>
				</div>
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