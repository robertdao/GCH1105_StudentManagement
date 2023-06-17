@extends('layout.layout')
@section('title','List course')
@section('content')
<div class="container-classroom">
    <table class="table-show">
            <tr class="tr-top">
                <th class="head-table">Course Name</th>
                <th class="head-table">Major</th>
                <th class="head-table">Action</th>
            </tr>
            @foreach ($course as $course)
            <tr class="tr-content">
                <td class="content-table">
                    {{$course->name}}
                </td>
                <td class="content-table">
                    {{$course->majors->name}}
                </td>
                <td>
                    <a href="{{url("/courses/".$course->id)}} ">View</a>
                    <a href="{{url("/courses/".$course->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{"/courses/".$course->id}}" method="post"class="d-inline" >
                      {{method_field('Delete')}}
                      @csrf
                      <button type='submit' class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            @endforeach
    </table>
</div>
    
@endsection