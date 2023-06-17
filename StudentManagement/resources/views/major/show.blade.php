@extends('layout.layout')
@section('title','Show Major')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{$major->name}}</h4>
    </div>
</div>
@endsection