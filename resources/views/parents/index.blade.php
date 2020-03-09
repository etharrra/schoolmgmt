@extends('parentstemplate')
@section('content')
<div class="row justify-content-around d-flex flex-wrap">
  @foreach($students as $value)
  <div class="w-25">
    <a href="{{route('parentsstudent',$value->id)}}">
      <div class="card text-dark mb-3" style="max-width: 18rem;background-color: lightgreen;">
        <div class="card-header">{{$value->name}}</div>
        <div class="card-body">
          <img src="{{asset($value->avatar)}}" class="card-img-top" style="object-fit: cover;" height="200px">
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection