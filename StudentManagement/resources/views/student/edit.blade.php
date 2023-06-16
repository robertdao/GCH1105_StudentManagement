@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action="/students/{{$student->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="student_id" class="form-label">student_id</label>
        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="student_id" value="{{$student->student_id}}">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$student->name}}">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="birth" value="{{$student->birth}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$student->email}}">
    </div>
    <div class="mb-3">
        <label for="classes" class="form-label">Class</label>

        <select id="classes" name="classes_id" class="form-select" aria-label="Select Class">
            <option>Please choose one</option>
            @foreach($classes as $class)
            <option {{ ($class->id == $student->class->id)?"selected":""}} value="{{$class->id}}">{{$class->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>


@endsection