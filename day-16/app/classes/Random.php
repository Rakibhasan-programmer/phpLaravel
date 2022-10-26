<?php


namespace App\classes;


class Random
{
    public $message = "Hello World";
    private $x = 10, $y = 20, $z = 30;
    public $name = [];
    public $data = [];

    public function printMessage(){
        echo $this->message;
        echo "<br>";
        $name = "Rakib";

        $this->name = ['Rakib', "Hasan", "Shakib", "Saim"];
        $this->data = ["Rakib", 10, 20.5, true, "Shakib", false];
        echo "<br>";
        echo $this->data[2];
        echo "<br>";

        $this->data = [
            0 => [
                'name' => "Rakib",
                'email' => "rakib@gmail.com",
                'phone' => "0173236",
                'location' => "Dhaka"
            ],
            1 => [
                'name' => "Shakib",
                'email' => "shakib@gmail.com",
                'phone' => "0173236",
                'location' => "Dhaka"
            ],
            2 => [
                'name' => "Saim",
                'email' => "shakib@gmail.com",
                'phone' => "0173236",
                'location' => "Dhaka"
            ],
            3 => [
                'name' => "S",
                'email' => "shakib@gmail.com",
                'phone' => "0173236",
                'location' => "Dhaka"
            ],
        ];
        echo $this->data[2]['phone'];
        foreach ($this->data as $item){
            echo $item['name']. '<br>';
        }

        echo "<br>";
        echo '<pre>';
        print_r($this->data);
        var_dump($this->data);


        // arrays
        $cars = ["Volvo", "BMW", "Toyota", "Nissan", "Audi", "Mercedes"];
        var_dump($cars);
        $arrlength = count($cars);
        for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }

        // associative arrays
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        foreach($age as $x => $val) {
            echo "$x = $val<br>";
        }


//        for($this->x; $this->x<=15; $this->x++){
//            echo $name . " ";
//        }

//        while($this->x < 15){
//            echo $this->x. " ";
//            $this->x++;
//        }
//        echo "<br>";

        do{
            echo $this->x. " ";
            $this->x++;
        }while($this->x < 15);


        switch ($this->x){
            case 5: echo "Hello Rakib";
                break;
            case 15: echo "Hello Mr";
                break;
            case 20: echo "Hello System";
                break;
            default: echo "Invalid";
                break;
        }

        if($this->x > $this->y){
            echo "<br>";
            echo "X is bigger";
        }elseif ($this->y > $this->z){
            echo "<br>";
            echo "Y is bigger";
        }elseif ($this->z > $this->x){
            echo "<br>";
            echo "Z is bigger";
        }else{
            echo "<br>";
            echo "Invalid Input";
        }


        if($this->x > $this->y){
            echo "<br>";
            echo "Y is bigger than x";
        }else{
            echo "<br>";
            echo "X is bigger";
        }
    }

    //    statement
    //    1. Single line
    //    2. conditional statement
    //    3. repeated statement

}