<?php

namespace App\classes;


class HelloWorld1
{
    public $message = "Hello World";
    public $firstName;
    public $lastName;

    public function __construct(){
        $this->firstName = "Md Rakibul";
        $this->lastName = "Hasan";
    }

    public function fullName(){
        echo $this->firstName." ".$this->lastName;
    }

    public function printInfo(){
        echo $this->message;
        echo "<br>";
    }
}