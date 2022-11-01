<?php


namespace App\classes;


class Series
{
    public $firstNumber;
    public $secondNumber;
    public $temp = 0;
    public $series;

    public function __construct($data)
    {
        $this->firstNumber = $data['first_number'];
        $this->secondNumber = $data['second_number'];
    }

    public function getSeries(){
        if($this->firstNumber > $this->secondNumber){
            $this->temp = $this->firstNumber;
            $this->firstNumber = $this->secondNumber;
            $this->secondNumber = $this->temp;

            for($this->firstNumber; $this->firstNumber<=$this->secondNumber; $this->firstNumber++){
                 $this->series .= $this->firstNumber. ",";
            }
        }else{
            for($this->firstNumber; $this->firstNumber<=$this->secondNumber; $this->firstNumber++){
                $this->series .= $this->firstNumber. ",";
            }
        }
        return rtrim($this->series, ",");
    }

}