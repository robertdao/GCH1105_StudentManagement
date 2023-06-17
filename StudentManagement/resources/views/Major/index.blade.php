@extends('layout.layout')
@section('title','List Major')
@section('content')
<div class="table-responsive">
    <table class="table-show">
        <thead class="table-light">
            <tr>
                <th class="head-table">Major Name</th>
                <th class="head-table">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($majors as $major)
                  <tr class="table-primary" >
                    <td class="tr-content">
                      <a href="{{url("/major/".$major->id)}}">
                      {{$major->name}}
                      </a>
                    </td class="tr-content">
                    <td class="tr-content">
                      <a href="{{url("/major/".$major->id)}}" class="btn btn-primary">View</a>
                      <a href="{{url("/major/".$major->id."/edit")}}" class="btn btn-warning">Edit</a>
                      <form action="{{url("/major/".$major->id)}}" method="post" class="d-inline">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
            <tfoot>
            </tfoot>
    </table>
  </div>
@endsection