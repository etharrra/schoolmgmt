@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="card-header py-3">
		<div class="row">
			<div class="col-10">
				<h6 class="m-0 font-weight-bold text-primary">Timetable</h6>
			</div>
			<div class="col-2">
				<a href="{{route('timetable.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
	</div>
	</div>
@endsection