@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action = '/students' method = 'post'>
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">MSV</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Book Title">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Book Title">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Birth</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Book Title">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Mail</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Book Title">
    </div>

@endsection