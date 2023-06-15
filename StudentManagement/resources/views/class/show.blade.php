@extends('layout.layout')
@section('tile', 'Show Class')
@section('content')
    <div class="container-show">
        <h4>
            {{$class->name}}
        </h4>
    </div>
@endsection