@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<div class="card">
    <div class="card-body">
       <h1 >{{$student->MSV}}</h1>
       <h1 >{{$student->name}}</h1>
       <h1 >{{$student->birth}}</h1>
       <h1 >{{$student->email}}</h1>
       <h1 >{{$student->classes->pluck('name')}}</h1>
       
    </div>
</div>




@endsection