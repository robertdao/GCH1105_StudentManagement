@extends('layout.layout')
@section('tile','List Major')
@section('content')
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th>Major Name</th>
                <th>Major Subject</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($majors as $major)
                  <tr class="table-primary" >
                    <td>
                      <a href="{{url("/major/".$major->id)}}">
                      {{$major->name}}
                      </a>
                    </td>
                    <td>{{$major->subject}}</td>
                    <td>
                      @foreach ($majors as $major)
                        <label>{{$major->name}}</label>
                      @endforeach
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