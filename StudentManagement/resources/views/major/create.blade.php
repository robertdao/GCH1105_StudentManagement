@extends('layout.layout')
@section('title','Create Major')
@section('content')
<form action="/major" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Major Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Major Name">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Major Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Major Subject">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection