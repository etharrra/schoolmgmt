@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
        <div class="card shadow mb-4">
		    <div class="card-header py-3">
                <div class="row">
                    <div class="col-10">
                        <h6 class="m-0 font-weight-bold text-primary">Teacher</h6>
                    </div>
                    <div class="col-2">
                        <a href="{{route('teacher.index')}}" class="btn btn-block btn-outline-success">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row"> 

                      <div class="col-6">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row">
                              <label class="form-control-label text-success">Name</label>
                              <input class="form-control" type="" disabled="" name="" value="{{$teacher->user->name}}"><br><br>
                            </div>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row">
                              <label class="form-control-label text-success">Phone</label>
                              <input class="form-control" type="" disabled="" name="" value="{{$teacher->phone}}"><br><br>
                            </div>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row">
                              <label class="form-control-label text-success">Address</label>
                              <input class="form-control" type="" disabled="" name="" value="{{$teacher->address}}"><br><br>
                            </div>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row">
                              <label class="form-control-label text-success">Education</label>
                              <input class="form-control" type="" disabled="" name="" value="{{$teacher->education}}"><br><br>
                            </div>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row">
                              <label class="form-control-label text-success">Grade</label>
                              <input class="form-control" type="" disabled="" name="" value="@php $g = $rooms @endphp @foreach($g as $v){{$v->grade->name}} @break @endforeach"><br><br>
                            </div>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-row">
                              <label class="form-control-label text-success">Room</label>
                              <input class="form-control" type="" disabled="" name="" 
                              value="@php $v=$teacher->rooms; @endphp@foreach($v as $value){{$value->name}}   @endforeach"><br><br>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                          <img src="{{asset($teacher->avatar)}}" class="img-fluid rounded border-left-success" style="height: 350px; object-fit: cover;">
                      </div>

                    </div>

                    


            </div><!-- carbody -->
        </div>
	</div>
@endsection