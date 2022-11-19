<?php


namespace App\classes;


class Category
{
    public $categories;

    public function category(){
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => 'Men Fashion'
            ],
            1 => [
                'id' => 2,
                'name' => 'Women Fashion'
            ],
            2 => [
                'id' => 3,
                'name' => 'Kids Fashion'
            ]
        ];

        return $this->categories;
    }

}