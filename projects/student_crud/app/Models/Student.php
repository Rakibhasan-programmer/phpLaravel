<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name  = $request->name;
        self::$student->city  = $request->city;
        self::$student->subject  = $request->subject;
        self::$student->CGPA  = $request->cgpa;
        self::$student->save();
    }

    public static function updateStudent($request, $id)
    {
        self::$student = Student::find($id);
        self::$student->name  = $request->name;
        self::$student->city  = $request->city;
        self::$student->subject  = $request->subject;
        self::$student->CGPA  = $request->cgpa;
        self::$student->save();
    }
    // delete student info
    public static function deleteStudent($id)
    {
        self::$student = Student::find($id);
        self::$student->delete();
    }
}
