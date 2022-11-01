<?php


namespace App\classes;


class Home
{
    public function home(){
        header("Location: action.php?page=home");
    }
}