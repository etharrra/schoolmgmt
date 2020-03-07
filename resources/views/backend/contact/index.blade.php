@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-10">
                        <h6 class="m-0 font-weight-bold text-primary">Attendance</h6>
                    </div>
                    <div class="col-2">
                        <a href="{{route('contact.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
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
							<th>Subject</th>
							<th>Message</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($contacts as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td><a href="">{{$row->name}}</a></td>
							<td>{{$row->email}}</td>
							<td>{{$row->subject}}</td>
							<td>{{$row->message}}</td>
							
						@endforeach	
					</tbody>
					<tfoot>
						<tr>
							<th class="text-center">No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
						</tr>
					</tfoot>
				</table>
			  </div>
		    </div>
	</div>
</div>	
@endsection