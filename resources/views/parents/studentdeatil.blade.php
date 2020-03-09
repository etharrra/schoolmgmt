@extends('parentstemplate')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="row">
      <div class="col-10">
        
      </div>
      <div class="col-md-2 col-sm-4 col-lg-2">
        <a href="{{route('parents')}}" class="btn btn-block" style="background-color: white;">back</a>
      </div>
    </div>
    </div>
    <div class="col-md-6">
      <div class="table-responsive">
        
            <table class="table-sm text-success bg-white table-hover" id="dataTable">
              <thead class="bg-success text-white">
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
                  <td>{{$persentjune}}%</td>
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
            </table>
          
      </div>
    </div>  
  </div>    
@endsection