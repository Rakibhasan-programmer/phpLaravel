<?php

namespace App\classes;


class HelloWorld1
{
    public $message = "Hello World";
    public $firstName;
    public $lastName;

    public $x = 10;
    public $y = 20;
    public $z = 30;

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
        echo $this->x + $this->y; // 30
        echo "<br>";
        echo $this->x - $this->y; // -10
        echo "<br>";
        echo $this->x * $this->y; // 200
        echo "<br>";
        echo $this->x / $this->y; // .5
        echo "<br>";
        echo $this->x % $this->y; // 10
        echo "<br>";

        echo $this->y--; // 20
        echo "<br>";
        echo --$this->y; // 18
        echo "<br>";
        echo $this->y--; // 18
        echo "<br>";
        echo $this->y--; // 17
        echo "<br>";

        echo -$this->z;
        echo "<br>";
        echo $this->x += $this->y; // 30
        echo "<br>";
        echo $this->x -= $this->y; // 10
        echo "<br>";

        echo $this->x > $this->y; // false
        echo "<br>";
        echo $this->x >= $this->y; // false
        echo "<br>";
        echo $this->x < $this->y; // true
        echo "<br>";
        echo $this->x <= $this->y; // true
        echo "<br>";
        echo $this->x = $this->y; // assign y value into x
        echo "<br>";
        echo $this->x === $this->y; // false
        echo "<br>";

        echo (($this->x < $this->y) && ($this->y < $this->z));

    }

    //    3 major rules in variables
    //    1. Start with dollar ($) sign
    //    2. a-z, A-Z, 0-9, -, _
    //    3. Not started with number

    //    standard rules
    //    1. Start with small letter.
    //    2. Meaningful name.
    //    3. Readable

    //    operators
    //    Arithmetic Operators(+, -, /, *, %, **, ++, --)
    //    Assignment Operator(=, +=, -=, *=, /=)
    //    Conditional Operator(===,==, <, <=, >, >=, !=, !==)
    //    Logical Operator(&&, ||, !)



}