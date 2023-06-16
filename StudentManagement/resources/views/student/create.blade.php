@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action = '/students' method = 'post'>
    @csrf
    <div class="mb-3">
        <label for="student_id" class="form-label">Student ID</label>
        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="List Student">     
    </div>
    <div class="mb-3">
        <label for="classes" class="form-label">Class</label>
        <select id="classes" name="classes_id" class="form-select" aria-label="Select Class">
            <option selected>Please choose one</option>
            @foreach($classes as $class)
            <option value="{{$class->id}}">{{$class->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="List Student">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="List Student">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="List Student">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection