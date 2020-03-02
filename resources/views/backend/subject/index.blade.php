@extends('backendtemplate')
@section('content')
	<div class="container-fluid mt-5 pt-5">
		<div class="row">
			<div class="col-md-10 col-sm-8 col-lg-10">
				
			</div>
			<div class="col-md-2 col-sm-4 col-lg-2">
				<a href="{{route('subject.create')}}" class="btn btn-block btn-outline-success">Add New</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table" id="dataTable">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Name</th>
							<th>Grade</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($subjects as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td>{{$row->name}}</td>
							@php
								$v = $row->grades;
							@endphp
							<td>
							@foreach($v as $key => $value)
								<span class="badge badge-pill badge-secondary">
								{{$value->name}},						</span>
							@endforeach
							</td>
							<td class="td-actions text-right">
								<!-- <button type="button" rel="tooltip" class="btn btn-info">
									<i class="material-icons">search</i>
								</button> -->
								<a href="{{route('subject.edit',$row->id)}}" class="btn btn-success">
									<i class="material-icons">edit</i>
								</a>
								<form method="post" action="{{ route('subject.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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