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
					<form action="{{ route('grade.update',$grade->id)}}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="academicyear" class="form-control-label">Academic Year</label>
							<input type="text" class="form-control" id="grade" name="name" placeholder="Select Grade"  value="{{$grade->name}}">

						</div>
						<div class="form-group">
							<label for="academicyear_id">Select Academicyear</label>
							<select name="academicyear_id" id="academicyear_id" class="form-control">
								@foreach($academicyear as $row)
								<option value="{{$row->id}}" @if($grade->academicyear_id == $row->id) {{'selected'}}@endif>{{$row->academicyear}}</option>
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