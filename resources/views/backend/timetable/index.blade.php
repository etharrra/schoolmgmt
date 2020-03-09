@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Timetable</h6>
				</div>
				<div class="col-2">
					<a href="{{route('timetable.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Time_start</th>
							<th>Time_finish</th>
							<th>Day</th>
							<th>Class</th>
							<th>Subject</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($timetables as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td>{{$row->time_start}}</td>
							<td>{{$row->time_finish}}</td>
							<td>{{$row->day}}</td>
							<td>{{$row->room->name}}</td>
							<td>{{$row->subject->name}}</td>
							<td class="td-actions text-right">
								<a href="{{route('timetable.edit',$row->id)}}" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<form method="post" action="{{ route('timetable.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
									</button>
								</form>
							</td>
						</tr>
						@endforeach	
					</tbody>
					<tfoot>
						<tr>
							<th class="text-center">No</th>
							<th>Time_start</th>
							<th>Time_finish</th>
							<th>Day</th>
							<th>Class_id</th>
							<th>Subject_id</th>
							<th class="text-right">Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>	
@endsection