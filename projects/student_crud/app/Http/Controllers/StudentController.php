<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students, $student;
    // form page
    public function index()
    {
        return view('student.index');
    }
    // data storing method
    public function store(Request $request)
    {
        Student::newStudent($request);
        return redirect('/student/add')->with('message', 'Student Info Saved Successfully');
    }
    // all students information
    public function manage()
    {
        $this->students = Student::all();
        return view('student.manage', ['students' => $this->students]);
    }
    // going to edit page
    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('student.edit', ['student' => $this->student]);
    }
    // updating the information
    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        redirect('/student/manage')->with('message', 'Student information updated successfully');
    }
    // delete student info
    public function delete($id)
    {
        Student::deleteStudent($id);
        redirect('/student/manage')->with('message', 'Student information deleted successfully');
    }
    //details
    public function details($id)
    {
        $this->student = Student::find($id);
        return view('student.details', ['student' => $this->student]);
    }
}
