@extends('layout.layout')
@section('title','Create Course')
@section('content')
<form action = '/courses' method = 'post'>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Course Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Course name">
        <button type="submit">Add Course</button>     
    </div>
@endsection