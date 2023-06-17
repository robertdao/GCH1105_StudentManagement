@extends('layout.layout')
@section('title','Create Course')
@section('content')
<form action = '/courses' method = 'post'>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Course Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Course name">
    </div>
    <div class="mb-3">
        <label for="majors_id" class="form-label">Major</label>
        <select id="majors_id" name="majors_id" class="form-select" aria-label="Select Major">
            <option selected>Please choose one</option>
            @foreach($majors as $major)
            <option value="{{$major->id}}">{{$major->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Add Course</button>     
@endsection