@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Contact</h6>
				</div>
				<div class="col-2">
					<a href="{{route('contact.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('contact.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="text" name="name" placeholder="Your Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="Your Email" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="subjet" placeholder="Subject" class="form-control">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="5" name="comment" placeholder="Message"></textarea>
						</div>
						<br>
						<div class="form-row">
						<div class="col-md-12">
							<input type="hidden">
							<button type="submit" class="btn btn-primary">Send Register</button>
						</div>
						</div>
						<br>
					</form>
				</div>
			</div>	
		</div>
	</div>	
</div>

@endsection