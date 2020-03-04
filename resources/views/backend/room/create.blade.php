@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Room</h6>
				</div>
				<div class="col-md-2 col-sm-4 col-lg-2">
					<a href="{{route('room.index')}}" class="btn btn-block btn-outline-success">back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('room.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<!-- <label for="academicyear" class="form-control-label">Academic Year</label> -->
							<input type="text" class="form-control" id="room" name="name" placeholder="Enter">
							@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="grade_id">Select Grade</label>
							<select name="grade_id" id="grade_id" class="form-control">
								<option><---Select Grade---></option>
									@foreach($grades as $row)
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