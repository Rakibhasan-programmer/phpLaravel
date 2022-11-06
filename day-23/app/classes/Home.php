<?php


namespace App\classes;
use App\classes\Student;


class Home extends Student
{
    public function home(){
        header("Location: action.php?page=home");
    }
}