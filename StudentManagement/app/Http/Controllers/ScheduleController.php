<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Time;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $times = Time::all();
        $classrooms = Classroom::all();
        $schedules = Schedule::all();
        return view('schedule.index',[
            'schedules' => $schedules,
            'classrooms' => $classrooms,
            'times' => $times
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $times = Time::all();
        $classrooms = Classroom::all();
        return view('schedule.create',[
            'times' => $times,
            'classrooms' => $classrooms
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $schedules = new Schedule();
        $schedules->dayOfWeek = $request->dayOfWeek;
        $schedules->save();
        $schedules->times()->attach($request->times);
        $schedules->classrooms()->attach($request->classrooms);
        return redirect('schedules');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $schedules = Schedule::find($id);
        $schedules->delete();
        return redirect('schedules');
    }
}