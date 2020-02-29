@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('timetable.create')}}" class="btn btn-block btn-outline-success">Add New</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Time_start</th>
							<th>Time_finish</th>
							<th>Day</th>
							<th>Class_id</th>
							<th>Subject_id</th>
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
							<td>{{$row->room_id}}</td>
							<td>{{$row->subject_id}}</td>
							<td class="td-actions text-right">
								<!-- <button type="button" rel="tooltip" class="btn btn-info">
									<i class="material-icons">search</i>
								</button> -->
								<a href="{{route('timetable.edit',$row->id)}}" class="btn btn-success">
									<i class="material-icons">edit</i>
								</a>
								<form method="post" action="{{ route('timetable.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">
										<i class="material-icons">delete</i>
									</button>
								</form>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	
	</div>
@endsection