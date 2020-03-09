@extends('backendtemplate')
@section('content')
<dir class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Mark</h6>
				</div>
				<div class="col-2">
					<a href="{{route('mark.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Student</th>
							<th>Subject</th>
							<th>Month</th>
							<th>Mark</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($mark as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td>{{$row->student->name}}</td>
							<td>{{$row->subject->name}}</td>
							<td>{{$row->month}}</td>
							<td>{{$row->mark}}</td>
							<td class="td-actions text-right">
								<a href="{{route('mark.edit',$row->id)}}" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<form method="post" action="{{ route('mark.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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
							<th>Student</th>
							<th>Subject</th>
							<th>Month</th>
							<th>Mark</th>
							<th class="text-right">Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</dir>
@endsection