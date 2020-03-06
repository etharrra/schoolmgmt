@extends('backendtemplate')
@section('content')

<div class="container-fluid mt-5 pt-5">
	<div class="row">
		<div class="col-md-10 col-sm-8 col-lg-10">

		</div>

	</div>
	<div class="container-fluid">

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-10">
						<h6 class="m-0 font-weight-bold text-primary">Attendance</h6>
					</div>

					<div class="col-2">

						<a href="{{route('attendance.index')}}" class="btn btn-block btn-outline-success mb-3">Back</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form>

					
					<div class="form-group  ">
						<label for="date" class="col-form-label"> Date </label>

						<div>
							<input type="date" class="form-control" id="date"  name="date">

						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">
								<label for="grade">Select Grade</label>
								<select name="grade" id="grade" class="form-control">
									<option selected=""><---Select Grade---></option>
										@foreach($grades as $grade)
										<option value="{{$grade->id}}" data-id="{{$grade->id}}">{{$grade->name}}</option>
										@endforeach
									</select>
								
							</div>
							<div class="col-6">
								<label for="room">Select Room</label>
								<select name="room" id="room" class="form-control">
									
								</select>
							</div>
						</div>
					</div>
						<div class="form-group">					
							<ul class="list-group" id="student_list">
								
							</ul>
						</div>

						<button class="btn btn-primary attendsubmit">submit</button>


					</form>
				</div>
			</div>
		</div> 
	</div>	
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('#dinput').hide();
		 $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
   	$('#grade').change(
   		function() {

   			var id = $( 'option:selected', this ).data( 'id' );
   			//alert(id);
   			$.get('/getroom/'+id, function(res) {
   				$room = res;
   				var html='<option selected=""><---Choose Room---></option>';
   				$.each($room, function(i, v) {
   					// console.log(v.name);
   					//console.log(v.id);
   					var rname = v.name;
   					var rid = v.id;
   					html += `

   					<option value="${v.id}" data-id="${v.id}">${v.name}</option>`;

   				});
   				$('#room').html(html);

   			});
   	});

   	$('#room').change(
   		function() {

   			var id = $( 'option:selected', this ).data( 'id' );
   			//alert(id);
   			$.get('/getstudent/'+id, function(res) {
   				var student = res;
   				for (var i = 0; i < student.length; i++) {
   					student[i]["description"] = null;
   				}
   				console.log(student);
   				var cart = localStorage.getItem("mycart");
   				var exit = 0;
   				
				if (!exit) {
					localStorage.clear();
				}
				cart = JSON.stringify(student);
				localStorage.setItem("mycart", cart);

   				var html=''; var i = 1;
   				$.each(student, function(i, v) {

   					// console.log(v.name);
   					// console.log(v.id);
   					var stname = v.name;
   					var stid = v.id;
   					html += `<li class="list-group-item">
									<div class="row">
										<div class="col-4 text-center">
											<label class="form-check-label text-success" for="${stid}">
											${stname}
											</label>
											<input type="hidden" class="cstudentid" value=${stid} name="student_id">
										</div>
										<div class="col-2">
											<input type="checkbox" class="form-check-inline cbox" name="status" id="${stid}" value="${stid}" checked>
										</div>
										<div class="col-6">
											<input type="text" name="description[]" class="form-control desc  des${stid}" id="${stid}">
										</div>
									</div>
								</li>`;

   				});
   				$('#student_list').html(html);
   				$('.desc').hide();
   				$('.cbox').click(
   					function() {
   						var checked_status = this.checked;
   						var cbox = $(this).val();
   						var status;
   						if(checked_status == false) {
   							$('.des'+cbox).show();
   							//var desid = $('.cbox').val();
   							//alert(cbox);
   							$('.des'+cbox).change(
   								function() {
   									
   								var vdes = $(this).val();
   								//alert(desid);
   								
   								var cart = localStorage.getItem("mycart");
   								var mycart=JSON.parse(cart);
   								$.each(mycart, function(i, v) {
   									
   									
   										if(v.id==cbox){
   											alert("Ok");
   										v.description=vdes;
   										
   									}
   									
   										 /* ishoeArray[id].qty=qty;terate through array or object */
   									});
   								cart = JSON.stringify(mycart);
								localStorage.setItem("mycart", cart);
   								



   								
   								/*$.each(cart, function(i, v) {
   									
   								});
   								*/

   							});
   						}
   						else { 
   							$('.des'+cbox).hide();
   							$('.des'+cbox).val(null);
   							var stuid = $(this).val();
   							// console.log(stuid);
   							// alert(desvalue);
   							// $('.des'+cbox).removeAttr('value');
   						}
   				});
   				

   			});
   	}); 
   
   $("form").submit(function(e){
        e.preventDefault();
   		//alert("OK");
   		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        var date = $('#date').val();
        var cart = localStorage.getItem("mycart");
        var mycart = JSON.parse(cart);
        $.post('/backend/attendance/', {date:date,mycart:mycart}, 
        	function(response) {
        	if (response) {
        		alert("Successfully!");
        		localStorage.clear();
        	}
        });
   });


});
</script>

@endsection