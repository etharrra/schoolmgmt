@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('academicyear.index')}}" class="btn btn-block btn-outline-success">back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row float-right">
					
				</div>
				<form action="{{ route('academicyear.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<!-- <label for="academicyear" class="form-control-label">Academic Year</label> -->
						<input type="text" class="form-control" id="academicyear" name="academicyear" placeholder="Enter Academic Year">
						
					</div>
					<input type="submit" name="submit" value="submit" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection