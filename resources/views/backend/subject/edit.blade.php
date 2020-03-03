@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Subject</h6>
				</div>
				<div class="col-md-2 col-sm-4 col-lg-2">
					<a href="{{route('subject.index')}}" class="btn btn-block btn-outline-success">back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('subject.update',$subject->id)}}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="subject" class="form-control-label">Subject</label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" value="{{$subject->name}}">

						</div>

						<div class="form-group">
							<label for="academicyear_id">Select Grade</label>
							@php
							$v = $subject->grades;

							@endphp								
							<select class="js-example-basic-multiple form-control" name="grades[]" multiple="multiple">
								@foreach($grades as $row)
								<option value="{{$row->id}}" @foreach($v as $key=> $value)

									@if($row->id==$value->pivot->grade_id) {{"selected"}} @endif 
									@endforeach>{{$row->name}}</option>
									@endforeach
							</select>
						</div>
							<input type="submit" name="submit" value="Update" class="btn btn-primary">
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
			$('.js-example-basic-multiple').select2();

		});
	</script>
	@endsection