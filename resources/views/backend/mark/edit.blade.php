@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Mark</h6>
				</div>
				<div class="col-md-2 col-sm-4 col-lg-2">
					<a href="{{route('mark.index')}}" class="btn btn-block btn-outline-success">back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('mark.update',$mark->id)}}" method="POST" enctype="multipart/form-data">

						@csrf
						@method('PUT')
						<div class="form-group  ">
							<label for="mark" class="col-form-label"> Mark </label>

							<div>
								<input type="text" class="form-control" id="mark"  name="mark" value="{{$mark->mark}}">

							</div>
						</div>
						<div class="form-group">
							<label for="student_id">Student</label>
							<div>
								<select class="form-control" name="student_id" id="student_id">
									
									<option value="{{$mark->student_id}}" >{{$mark->student->name}}</option>
									
								</select>
							</div>		
						</div>

						<div class="form-group">
							<label for="subject_id">Subject</label>
							<div>
								<select class="form-control" name="subject_id" id="subject_id">
									<option value="{{$mark->subject_id}}">{{$mark->subject->name}}</option>
								</select>
							</div>		
						</div>

						<div class="form-group  ">
							<label for="month" class="col-form-label"> Month </label>

							<div>
								<select id="month" class="form-control" name="month">
									<option value="{{$mark->month}}">{{$mark->month}}</option>
								</select>

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