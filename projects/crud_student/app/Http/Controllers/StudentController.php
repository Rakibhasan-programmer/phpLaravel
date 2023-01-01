<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function newStudent(Request $request)
    {
        Student::createStudent($request);
        return redirect()->back()->with('message', 'Student created successfully');
    }
}
