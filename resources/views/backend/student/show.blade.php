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

          <div class="container-fluid mt-5">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable">
                <thead class="bg-success">
                  <tr>
                    <th>Month</th>
                    @foreach($room_subject as $value)
                    <th>{{$value->subjectname}}</th>
                    @endforeach
                     <th>Total</th>
                    <th>Attendance</th>                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @php $fail = 40; $total=0 @endphp
                    <th>June</th>
                    @foreach($student_mark_june as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $total=$total + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$total}}</td>
                    <td>{{$persent}}%</td>
                  </tr>
                  <tr>
                    <th>July</th>
                    @php $fail = 40; $jultotal=0 @endphp
                    @foreach($student_mark_july as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $jultotal=$jultotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$jultotal}}</td>
                  </tr>
                  <tr>
                    <th>August</th>
                    @php $fail = 40; $augtotal=0 @endphp
                    @foreach($student_mark_august as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $augtotal=$augtotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$augtotal}}</td>
                  </tr>
                  <tr>
                    <th>September</th>
                    @php $fail = 40; $septotal=0 @endphp
                    @foreach($student_mark_september as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $septotal=$septotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$septotal}}</td>
                  </tr>
                  <tr>
                    <th>October</th>
                    @php $fail = 40; $octtotal=0 @endphp
                    @foreach($student_mark_october as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $octtotal=$octtotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$octtotal}}</td>
                  </tr>
                  <tr>
                    <th>November</th>
                    @php $fail = 40; $novtotal=0 @endphp
                    @foreach($student_mark_november as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $novtotal=$novtotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$novtotal}}</td>
                  </tr>
                  <tr>
                    <th>December</th>
                    @php $fail = 40; $dectotal=0 @endphp
                    @foreach($student_mark_december as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $dectotal=$dectotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$dectotal}}</td>
                  </tr>
                  <tr>
                    <th>January</th>
                    @php $fail = 40; $jantotal=0 @endphp
                    @foreach($student_mark_january as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $jantotal=$jantotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$jantotal}}</td>
                  </tr>
                  <tr>
                    <th>February</th>
                    @php $fail = 40; $febtotal=0 @endphp
                    @foreach($student_mark_february as $value)
                    <td class="@if($value->mark < $fail){{'text-danger '}}@endif">{{$value->mark}}</td>
                    @php 
                    $febtotal=$febtotal + $value->mark;
                    @endphp
                    @endforeach
                    <td>{{$febtotal}}</td>
                  </tr>
                </tbody>
                <tfoot class="bg-success">
                  <tr>
                    <th>Month</th>
                    @foreach($room_subject as $value)
                    <th>{{$value->subjectname}}</th>
                    @endforeach
                    <th>Total</th>
                    <th>Attendance</th>                    
                  </tr>
                </tfoot>
              </table>
            </div>
            
          </div>
        </div>
   </div>
</div>
@endsection