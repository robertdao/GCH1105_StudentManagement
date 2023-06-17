@extends('layout.layout')
@section('title', 'Information Of Student')
@section('content')
<div class="card">
    <div class="card-body">
       <h1 >{{$student->student_id}}</h1>
       <h1 >{{$student->name}}</h1>
       <h1 >{{$student->birth}}</h1>
       <h1 >{{$student->email}}</h1>
       <h1 >{{$student->classes->pluck('name')}}</h1>
       <img src="{{url("/upload/".$student->photo)}}" alt="">
    </div>
</div>




@endsection