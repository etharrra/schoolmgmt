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
					<a href="{{route('guardian.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($guardian as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td>{{$row->user->name}}</td>
							<td>{{$row->user->email}}</td>
							<td>{{$row->phone}}</td>
							<td>{{$row->address}}</td>
							<td class="td-actions text-right">
								<a href="{{route('guardian.show',$row->id)}}" class="btn btn-info detail">
									<i class="fas fa-search"></i>
								</a>
								<a href="{{route('guardian.edit',$row->id)}}" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<form method="post" action="{{ route('guardian.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th class="text-right">Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection