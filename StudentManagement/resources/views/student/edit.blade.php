@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action="/students/{{$student->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="MSV" class="form-label">MSV</label>
        <input type="text" class="form-control" id="MSV" name="MSV" placeholder="MSV" value="{{$student->MSV}}">
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
        <label for="mail" class="form-label">Mail</label>
        <input type="text" class="form-control" id="mail" name="mail" placeholder="mail" value="{{$student->mail}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>


@endsection