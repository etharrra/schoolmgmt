@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-10">
                        <h6 class="m-0 font-weight-bold text-primary">Academic Year</h6>
                    </div>
                    <div class="col-2">
                        <a href="{{route('academicyear.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Year</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($academicyears as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td>{{$row->academicyear}}</td>
							<td class="td-actions text-right">
								<!-- <button type="button" rel="tooltip" class="btn btn-info">
									<i class="material-icons">search</i>
								</button> -->
								<a href="{{route('academicyear.show',$row->id)}}" class="btn btn-info detail">
									<i class="fas fa-search"></i>
								</a>
								<a href="{{route('academicyear.edit',$row->id)}}" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<form method="post" action="{{ route('academicyear.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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
							<th>Year</th>
							<th class="text-right">Actions</th>
						</tr>
					</tfoot>
				</table>
			  </div>
		    </div>
	</div>
</div>	
@endsection