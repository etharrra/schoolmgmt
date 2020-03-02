@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('subject.index')}}" class="btn btn-block btn-outline-success">back</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row float-right">
					
				</div>
				<form action="{{ route('subject.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<!-- <label for="academicyear" class="form-control-label">Academic Year</label> -->
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
						
					</div>
					<div class="form-group">								
						<select class="js-example-basic-multiple form-control" name="grades[]" multiple="multiple">
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
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    
});
</script>
@endsection