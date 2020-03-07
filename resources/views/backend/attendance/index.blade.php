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
                        <a href="{{route('attendance.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            	<!-- <form>
            		<div class="form-group row">
            			<div class="col-6">
            				<label class="form-control-label">Select Grade</label>
	            			<select class="form-control" id="grade">
	            				
	            				
	            			</select>
            			</div>
            			<div class="col-6">
            				<label class="form-control-label">Select Room</label>
	            			<select class="form-control" id="room">

	            			</select>
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="form-control-label">Select Date</label>
            			<input type="date" id="date" name="date" class="form-control">
            		</div>
            	</form> -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Date</th>
							<th>Status</th>
							<th>Description</th>
							<th>Student</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($attendance as $row)
						<tr>
							<td class="text-center">{{$i++}}</td>
							<td><a href="">{{$row->date}}</a></td>
							<td>{{$row->status}}</td>
							<td>{{$row->description}}</td>
							<td>{{$row->student->name}}</td>
							<td class="td-actions text-right">
								<a href="{{route('attendance.edit',$row->id)}}" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<form method="post" action="{{ route('attendance.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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
							<th>Date</th>
							<th>Status</th>
							<th>Description</th>
							<th>Student_id</th>
							<th class="text-right">Actions</th>
						</tr>
					</tfoot>
				</table>
			  </div>
		    </div>
	</div>
</div>	
@endsection

<!-- @section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

    	$('#grade').change(
   		function() {
   			// alert("ok");
   			var id = $( 'option:selected', this ).data( 'id' );
   			//alert(id);
   			$.get('/getroom/'+id, function(res) {
   				$room = res;
   				var html='<option selected=""><---Select Room---></option>';
   				$.each($room, function(i, v) {
   					// console.log(v.name);
   					// console.log(v.id);
   					var rname = v.name;
   					var rid = v.id;
   					html += `<option value="${rid}" data-roomid="${rid}">${rname}</option>`;

   				});
   				$('#room').html(html);
   				
   			});

   		});
    	$('#room').change(
    		function() {
    			var roomid = $( 'option:selected', this ).data( 'roomid' );
   			alert(roomid);
   		});
   		$('#date').change(
   			function() {
   			var date = $(this).val();
   			// alert(date);
   			$.post('/dateAttendance/', {roomid:roomid,date:date}, 
   				function(res) {
   				
   			});
   		});
   		
    
});
</script>
@endsection -->