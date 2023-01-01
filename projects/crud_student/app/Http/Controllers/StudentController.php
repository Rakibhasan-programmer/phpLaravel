<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student;

    public function index()
    {
        $this->student = Student::all();
        return view('index', ['students' => $this->student]);
    }

    public function newStudent(Request $request)
    {
        Student::createStudent($request);
        return redirect()->back()->with('message', 'Student created successfully');
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('edit', ['student' => $this->student]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/')->with('update', 'Updated successfully');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/')->with('update', 'Deleted successfully');
    }
}
