<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('student.index', [
            'students' => $students,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('student.create', [
            'students' => $students,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->MSV = $request->MSV;
        $students->name = $request->name;
        $students->birth = $request->birth;
        $students->mail = $request->mail;
        $students->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::find($id);
        return view('student.show', [
            'student' => $students,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::find($id);
        
        return view('student.edit', [
            'student' => $students,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Student::find($id);

        $students->MSV = $request->MSV;
        $students->name = $request->name;
        $students->birth = $request->birth;
        $students->mail = $request->mail;

        $students->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();

        return redirect('/students');
    }
}