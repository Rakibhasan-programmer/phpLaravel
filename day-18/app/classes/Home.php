<?php


namespace App\classes;


class Home
{

    public function printInfo(){
        header("Location: action.php?page=home");
    }

}