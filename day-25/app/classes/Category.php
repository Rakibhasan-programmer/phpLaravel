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
                'name' => 'Man Fashion'
            ],
            1 => [
                'id' => 2,
                'name' => 'Women Fashion'
            ],
            3 => [
                'id' => 3,
                'name' => 'Kids Fashion'
            ],
        ];
    }

    public function getAllCategories(){
        return $this->categories;
    }

}