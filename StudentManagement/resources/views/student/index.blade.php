@extends('layout.layout')
@section('title', 'List Student')
@section('content')

<div class="container-classroom">
    <table class="table-show">
            <tr class="tr-top">
                <th class="head-table">Student ID</th>
                <th class="head-table">Name</th>
                <th class="head-table">Birth Year</th>
                <th class="head-table">Email</th>
                <th class="head-table">Action</th>
            </tr>
            @foreach ($students as $student)
            <tr class="tr-content">
                <td class="content-table">
                    {{$student->MSV}}
                </td>
                <td class="content-table">
                    {{$student->name}}
                </td>
                <td class="content-table">
                    {{$student->birth}}
                </td>
                <td class="content-table">
                    {{$student->mail}}
                </td>

                <td>
                    <a href="{{url("/students/".$student->id)}} ">View</a>
                    <a href="{{url("/students/".$student->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{"/students/".$student->id}}" method="post"class="d-inline" >
                      {{method_field('Delete')}}
                      @csrf
                      <button type='submit' class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection