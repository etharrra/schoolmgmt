@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-10">
					<h6 class="m-0 font-weight-bold text-primary">Student</h6>
				</div>
				<div class="col-2">
					<a href="{{route('student.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All Students</a>
				</li>
				@foreach($grades as $row)
				<li class="nav-item">
					<a class="nav-link grade" id="pills-home-tab{{$row->id}}" data-toggle="pill" href="#pills-home{{$row->id}}" role="tab" aria-controls="pills-home{{$row->id}}" aria-selected="false" data-id="{{$row->id}}">{{$row->name}}</a>
				</li>
				@endforeach
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Room</th>
									<th>Guardian Name</th>
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
								@php $i = 1; @endphp
								@foreach($students as $row)

										<tr>
											<td class="text-center">{{$i++}}</td>
											<td>{{$row->name}}</td>
											<td>{{$row->phone}}</td>
											<td>{{$row->room->name}}</td>
											<td>{{$row->user->name}}</td>
											<td class="td-actions text-right">
										<!-- <button type="button" rel="tooltip" class="btn btn-info">
											<i class="material-icons">search</i>
										</button> -->
										<a href="{{route('student.show',$row->id)}}" class="btn btn-success">
											<i class="fas fa-search"></i>
										</a>
										<a href="{{route('student.edit',$row->id)}}" class="btn btn-success">
											<i class="fas fa-edit"></i>
										</a>
										<form method="post" action="{{ route('student.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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
									<th>Phone</th>
									<th>Room</th>
									<th>Guardian Name</th>
									<th class="text-right">Actions</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				@foreach($grades as $row)
				<div class="tab-pane fade" id="pills-home{{$row->id}}" role="tabpanel" aria-labelledby="pills-home-tab{{$row->id}}">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Room</th>
									<th>Guardian Name</th>
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody id="tbody">
								
								
								
						
							</tbody>

							<tfoot>
								<tr>
									<th class="text-center">No</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Room</th>
									<th>Guardian Name</th>
									<th class="text-right">Actions</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.grade').click(
        	function() {
        	var id = $(this).data('id');
        	// alert(id);
        	$.get('/gradestudent/'+id, 
        		function(res) {
        			console.log(res);
        			var gradestudent = res;
        			var html = ''; var i = 1;
        			$.each(gradestudent, function(i, v) {
        				// console.log(v.id);
        				// console.log(v.sname);
        				var routeshow = "{{route('student.show',':id')}}";
        				 	routeshow = routeshow.replace(':id',v.id);
        				var routeedit = "{{route('student.edit',':id')}}";
        					routeedit = routeedit.replace(':id',v.id);
        				var routedestroy = "{{route('student.destroy',':id')}}";
        					routedestroy = routedestroy.replace(':id',v.id);	 	
        				var id = v.id;
        				html += `<tr>
									<td class="text-center">${i++}</td>
									<td>${v.sname}</td>
									<td>${v.phone}</td>
									<td>${v.rname}</td>
									<td>${v.uname}</td>
									<td class="td-actions text-right">
										<a href="${routeshow}" class="btn btn-success">
											<i class="fas fa-search"></i>
										</a>
										<a href="${routeedit}" class="btn btn-success">
											<i class="fas fa-edit"></i>
										</a>
										<form method="post" action="${routedestroy}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger">
												<i class="far fa-trash-alt"></i>
											</button>
										</form>
									</td>
								</tr>`;
        			});
        			$('tbody').html(html);
        	});
        });
	});
</script>

@endsection