@extends('layout.layout')
@section('title', 'Edit Course')
@section('content')

<form action="/courses/{{$course->id}}" method="POST">
    {{method_field('PUT')}}
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text"
        class="form-control" name="name" id="name"  placeholder="" value="{{$course->name}}">
    </div>
    <button type="submit">Submit</button>
</form>
@endsection