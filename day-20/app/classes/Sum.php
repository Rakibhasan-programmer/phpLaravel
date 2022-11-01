<?php


namespace App\classes;


class Sum
{
    public $firstNumber;
    public $secondNumber;
    public $temp = 0;
    public $sum;

    public function __construct($data)
    {
        $this->firstNumber = $data['first_number'];
        $this->secondNumber = $data['second_number'];
    }

    public function getSum(){
        if($this->firstNumber > $this->secondNumber){
            $this->temp = $this->firstNumber;
            $this->firstNumber = $this->secondNumber;
            $this->secondNumber = $this->temp;

            for($this->firstNumber; $this->firstNumber<=$this->secondNumber; $this->firstNumber++){
                $this->sum =  $this->sum + $this->firstNumber;
            }
        }else{
            for($this->firstNumber; $this->firstNumber<=$this->secondNumber; $this->firstNumber++){
                $this->sum =  $this->sum + $this->firstNumber;
            }
        }
        return $this->sum;
    }

}