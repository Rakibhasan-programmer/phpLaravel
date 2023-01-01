<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;

    public static function createStudent($req)
    {
        self::$student = new Student();
        self::$student->name = $req->name;
        self::$student->city = $req->city;
        self::$student->subject = $req->subject;
        self::$student->cgpa = $req->cgpa;
        self::$student->save();
    }

    public static function updateStudent($req, $id)
    {
        self::$student = Student::find($id);
        self::$student->name = $req->name;
        self::$student->city = $req->city;
        self::$student->subject = $req->subject;
        self::$student->cgpa = $req->cgpa;
        self::$student->save();
    }
}
