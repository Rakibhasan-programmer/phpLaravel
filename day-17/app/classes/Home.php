<?php


namespace App\classes;


class Home
{
    public $message = "Hello World";

    public function printInfo(){
        header("Location: action.php?page=home");
    }

}