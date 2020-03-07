@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h4 class="m-0 font-weight-bold text-primary">{{$room->name}}
						<span class="badge badge-success">
							@foreach($grade as $value)
							{{$value->gradename}}
							@endforeach
						</span>
					</h4>
				</div>
				<div class="col-2">
					<a href="{{route('room.index')}}" class="btn btn-block btn-outline-success">Back</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				@foreach($roomteacher as $teachers)
				<div class="col-4">
					<div class="card text-dark bg-success mb-3" style="max-width: 18rem;">
						<div class="card-header">{{$teachers->uname}}</div>
						<div class="card-body">
							<img src="{{asset($teachers->tavatar)}}" class="card-img-top" style="object-fit: cover;" height="200px">
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable">
					<thead>
						<tr>
							<th>NO</th>
							<th>Name</th>
							<th>phone</th>
							<th>Guardian Name</th>	
							<th>Action</th>			
						</tr>
					</thead>
					<tbody>
						@php $i=1; @endphp
						@foreach($roomstudent as $students)
							<tr>
								<td>{{$i++}}</td>
								<td><a href="">{{$students->name}}</a></td>
								<td>{{$students->phone}}</td>
								<td>{{$students->gname}}</td>
								<td class="td-actions text-center">
									<a href="{{route('student.show',$students->id)}}" class="btn btn-success">
										<i class="fas fa-search"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>NO</th>
							<th>Name</th>
							<th>phone</th>
							<th>Guardian Name</th>
							<th>Action</th>				
						</tr>
					</tfoot>
				</table>				
			</div>
									
		</div>
	</div>
</div>	
@endsection