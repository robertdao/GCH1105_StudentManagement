@extends('layout.layout')
@section('tile', 'Add Class')
@section('content')
    <form action="/class" method="post">
        @csrf
        <input type="text" name="name" placeholder="Input classroom's name">
        <input type="text" name="capacity" placeholder="Input number limit of class">
        <button type="submit">Add Classroom</button>
    </form>
@endsection