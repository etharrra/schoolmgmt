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
                <a href="{{route('student.index')}}" class="btn btn-block btn-outline-success">Back</a>
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
                      <input class="form-control" type="" disabled="" name="" value="{{$student->name}}"><br><br>
                    </div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <label class="form-control-label text-success">Phone</label>
                      <input class="form-control" type="" disabled="" name="" value="{{$student->phone}}"><br><br>
                    </div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <label class="form-control-label text-success">Address</label>
                      <input class="form-control" type="" disabled="" name="" value="{{$student->address}}"><br><br>
                    </div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <label class="form-control-label text-success">Date of Birth</label>
                      <input class="form-control" type="" disabled="" name="" value="{{$student->dob}}"><br><br>
                    </div>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <label class="form-control-label text-success">Room</label>
                      <input class="form-control" type="" disabled="" name="" value="{{$student->room->name}}"><br><br>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-6">
                  <img src="{{asset($student->avatar)}}" class="img-fluid rounded border-left-success" style="height: 350px; object-fit: cover;">
              </div>

            </div>

            <div class="row mt-5">
              <div class="col-12">
                <h3 class="text-success text-center">Guardian Information</h3>
              </div>
              <div class="col-6">
                <div class="form-row">
                  <label class="form-control-label text-success">Name</label>
                  <input class="form-control" type="" disabled="" name="" value="{{$student->user->name}}"><br><br>
                </div>
              </div>
              <div class="col-6">
                  <div class="form-row">
                    <label class="form-control-label text-success">Email</label>
                    <input class="form-control" type="" disabled="" name="" value="{{$student->user->email}}"><br><br>
                  </div>
              </div>
               <div class="col-6">
                  <div class="form-row">
                      <label class="form-control-label text-success">Phone</label>
                      <input class="form-control" type="" disabled="" name="" value="{{$guardian[0]['phone']}}"><br><br>
                  </div>
              </div>
              <div class="col-6">
                  <div class="form-row">
                      <label class="form-control-label text-success">Address</label>
                      <input class="form-control" type="" disabled="" name="" value="{{$guardian[0]['address']}}"><br><br>
                  </div>
              </div>
            </div>
          </div>
        </div>
   </div>
</div>
@endsection