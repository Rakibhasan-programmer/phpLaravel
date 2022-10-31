<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;
    public $fullName;

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
    }

    public function getFullName(){
        $this->fullName = $this->firstName. " ". $this->lastName;
        return $this->fullName;
    }
}