<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $operator;
    public $result;

    public function __construct($data)
    {
        $this->firstNumber = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator = $data['actions'];
    }

    public function getResult()
    {
        if($this->operator == '+'){
            $this->result = $this->firstNumber + $this->secondNumber;
        }elseif($this->operator == '-'){
            $this->result = $this->firstNumber - $this->secondNumber;
        }elseif($this->operator == '*'){
            $this->result = $this->firstNumber * $this->secondNumber;
        }elseif($this->operator == '/'){
            $this->result = $this->firstNumber / $this->secondNumber;
        }elseif($this->operator == '%'){
            $this->result = $this->firstNumber % $this->secondNumber;
        }else{
            $this->result = "Invalid Operator! Try again";
        }

        return $this->result;
    }

}