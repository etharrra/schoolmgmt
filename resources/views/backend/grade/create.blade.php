@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Grade</h6>
				</div>
				<div class="col-md-2 col-sm-4 col-lg-2">
					<a href="{{route('grade.index')}}" class="btn btn-block btn-outline-success">back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div class="row float-right">

					</div>
					<form action="{{ route('grade.store')}}" method="POST">
						@csrf
						<div class="form-group">
							 <label for="academicyear" class="form-control-label">Academic Year</label>
							<input type="text" class="form-control" id="grade" name="name" placeholder="Enter Grade">
							@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="academicyear_id">Select Academicyear</label>
							<select name="academicyear_id" id="academicyear_id" class="form-control">
								<option><---Select Year---></option>
									@foreach($academicyear as $row)
									<option value="{{$row->id}}">{{$row->academicyear}}</option>
									@endforeach
								</select>
								@error('academicyear')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>
							<input type="submit" name="submit" value="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
	@endsection