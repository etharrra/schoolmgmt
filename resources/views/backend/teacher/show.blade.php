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
           <table class="table table-borderless">
             <tr>
               <td>Name:</td>
               <td>{{$teacher->user->name}}</td>
             </tr>
             <tr>
               <td>Phone:</td>
               <td>{{$teacher->phone}}</td>
             </tr>
             <tr>
               <td>Address:</td>
               <td>{{$teacher->address}}</td>
             </tr>
             <tr>
               <td>Education:</td>
               <td>{{$teacher->education}}</td>
             </tr>
             <tr>
               <td>Grade:</td>
               <td>@php $g = $rooms @endphp @foreach($g as $v){{$v->grade->name}} @break @endforeach</td>
             </tr>
             <tr>
               <td>Room:</td>
               <td>@php $v=$teacher->rooms; @endphp@foreach($v as $value){{$value->name}}   @endforeach</td>
             </tr>
           </table>
          </div>
          <div class="col-6">
          <img src="{{asset($teacher->avatar)}}" class="img-fluid rounded border-left-success" style="height: 350px; object-fit: cover;">
          </div>
        </div>
      </div><!-- carbody -->
    </div>
  </div>
</div>
@endsection