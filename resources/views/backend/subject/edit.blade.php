@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('subject.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row float-right">
					
				</div>
				<form action="{{ route('subject.update',$subject->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" value="{{$subject->subject}}">
						
					</div>
					<input type="submit" name="submit" value="Update" class="btn btn-primary">
					
					
				</form>
			</div>
		</div>
	</div>
@endsection