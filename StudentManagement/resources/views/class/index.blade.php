@extends('layout.layout')
@section('title', 'Class')
@section('content')
    <div class="container-classroom">
        <table class="table-show">
                <tr class="tr-top">
                    <th class="head-table">No.</th>
                    <th class="head-table">Classroom</th>
                    <th class="head-table">Student</th>
                    <th class="head-table">Action</th>
                </tr>
                @foreach ($classes as $class)
                <tr class="tr-content">
                    <td class="content-table">
                        {{$class->id}}
                        {{-- 1 --}}
                    </td>
                    <td class="content-table">
                        {{$class->name}}
                        {{-- GCH1105 --}}
                    </td>
                    <td class="content-table">
                        {{$class->name}}
                        {{-- Dao Van Hieu --}}
                    </td>
                    <td>
                        <a href="{{url("/class/".$class->id)}} "">View</a>
                        <a href="{{url("/class/".$class->id."/edit")}}" class="btn btn-warning">Edit</a>
                        <form action="{{"/class/".$class->id}}" method="post"class="d-inline" >
                          {{method_field('Delete')}}
                          @csrf
                          <button type='submit' class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection