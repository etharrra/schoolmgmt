@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Guardian</h6>
				</div>
				<div class="col-2">
					<a href="{{route('guardian.index')}}" class="btn btn-block btn-outline-success mb-3">Back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			{{$guardian->user->name}}
		</div>
	</div>
</div>
@endsection