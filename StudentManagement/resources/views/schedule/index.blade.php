@extends('layout.layout')
@section('title', 'List Schedules')
@section('content')


@if (count($schedules) > 0)
    <div class="container-classroom">
        <table class="table-show">
                <tr class="tr-top">
                    <th class="head-table">Day Of Week</th>
                    <th class="head-table">Time</th>
                    <th class="head-table">Classroom</th>
                    <th class="head-table">Action</th>
                </tr>
                @foreach ($schedules as $schedule)
                <tr class="tr-content">
                    <td class="content-table">
                        {{$schedule->dayOfWeek}}
                    </td>
                    @foreach ($schedule->times as $time)    
                        <td class="content-table">
                            {{$time->time}}
                        </td>
                    @endforeach
                </td>
                @foreach ($schedule->classrooms as $classroom)    
                    <td class="content-table">
                        {{$classroom->classroom}}
                    </td>
                @endforeach
                @foreach ($schedule->classes as $class)    
                    <td class="content-table">
                        {{$class->name}}
                    </td>
                @endforeach
                    <td class="content-table">
                        <div class="VED">
                            <a class="VED1" href="{{url("/schedules/".$schedule->id)}} ">View</a>
                            <a href="{{url("/schedules/".$schedule->id."/edit")}}" class="VED2">Edit</a>
                            <form action="{{"/schedules/".$schedule->id}}" method="post" >
                              {{method_field('Delete')}}
                              @csrf
                              <button type='submit' class="VED3" onclick="return confirm('Are you sure?')">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@else
<h1>Dont have schedule</h1>
@endif
@endsection