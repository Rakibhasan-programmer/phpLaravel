<?php


namespace App\classes;


class Category
{
    private $categories;

    public function __construct()
    {
       $this->categories = [
           0 => [
               'id' => 1,
               'name' => 'Male'
           ],
           1 => [
               'id' => 2,
               'name' => 'Female'
           ],
           2 => [
               'id' => 3,
               'name' => 'Others'
           ]
       ];
    }
    public function getAllCategories(){
        return $this->categories;
    }

}