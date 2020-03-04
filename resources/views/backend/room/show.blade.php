@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('room.index')}}" class="btn btn-block btn-outline-success">Back</a>
			</div>
		</div>
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable">
					<thead>
						<tr>
							<th>Day</th>
							<th>9:00-9:45</th>
							<th>9:45-10:30</th>
							<th>10:30-11:15</th>
							<th>11:15-12:00</th>
							<th>1:00-1:45</th>
							<th>1:45-2:30</th>
							<th>2:30-3:15</th>				
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Monday</th>
							@foreach($tmon as $row)
								<td>{{$row->subname}}</td>
							@endforeach
						</tr>
						<tr>
							<th>Tuesday</th>
							@foreach($ttue as $row)
								<td>{{$row->subname}}</td>
							@endforeach							
						</tr>
						<tr>
							<th>Wednesday</th>
							
						</tr>
						<tr>
							<th>Thursday</th>
							
						</tr>
						<tr>
							<th>Friday</th>
							
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Day</th>
							<th>9:00-9:45</th>
							<th>9:45-10:30</th>
							<th>10:30-11:15</th>
							<th>11:15-12:00</th>
							<th>1:00-1:45</th>
							<th>1:45-2:30</th>
							<th>2:30-3:15</th>				
						</tr>
					</tfoot>
				</table>
				
			</div>
		</div>
	</div>
@endsection