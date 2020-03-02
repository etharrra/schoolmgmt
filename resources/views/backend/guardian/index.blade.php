@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('guardian.create')}}" class="btn btn-block btn-outline-success">Add New</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h3>Guardian List</h3>
				<table class="table">
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
								
								<a href="{{route('guardian.edit',$row->id)}}" class="btn btn-success">
									<i class="material-icons">edit</i>
								</a>
								<form method="post" action="{{ route('guardian.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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