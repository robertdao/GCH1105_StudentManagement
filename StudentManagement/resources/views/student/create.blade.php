@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action = '/students' method = 'post'>
    @csrf
    <div class="mb-3">
        <label for="MSV" class="form-label">MSV</label>
        <input type="text" class="form-control" id="MSV" name="MSV" placeholder="List Student">     
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
        <label for="email" class="form-label">Mail</label>
        <input type="mail" class="form-control" id="mail" name="mail" placeholder="List Student">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection