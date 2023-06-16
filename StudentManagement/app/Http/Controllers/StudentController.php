<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Classes;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $classes = Classes::all();

        return view('student.index', [
            'students' => $students,
            'classes' => $classes

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $classes = Classes::all();
        return view('student.create', [
            'students' => $students,
            'classes' => $classes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->student_id = $request->student_id;
        $students->name = $request->name;
        $students->birth = $request->birth;
        $students->email = $request->email;
        $students->classes_id = $request->classes_id;
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
        $classes = Classes::all();
        return view('student.edit', [
            'student' => $students,
            'classes' => $classes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Student::find($id);

        $students->student_id = $request->student_id;
        $students->name = $request->name;
        $students->birth = $request->birth;
        $students->email = $request->email;
        $students->classes_id = $request->classes_id;

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
