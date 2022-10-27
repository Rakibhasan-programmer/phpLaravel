<?php


namespace App\classes;


class Products
{
    public $products = [];
    public function allProducts(){
        $this->products = [
            0 => [
                'id' => 1,
                'name' => 'White Shirt',
                'price' => '5000',
                'image' => 'assets/images/1.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'
            ],
            1 => [
                'id' => 2,
                'name' => 'Black Shirt',
                'price' => '4000',
                'image' => 'assets/images/2.jfif',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            2 => [
                'id' => 3,
                'name' => 'Cyan Shirt',
                'price' => '6000',
                'image' => 'assets/images/3.jfif',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            3 => [
                'id' => 4,
                'name' => 'Purple T-Shirt',
                'price' => '2000',
                'image' => 'assets/images/4.jfif',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            4 => [
                'id' => 5,
                'name' => 'Magenta Shirt',
                'price' => '9000',
                'image' => 'assets/images/5.jfif',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'
            ],
            5 => [
                'id' => 6,
                'name' => 'Deep Pink Shirt',
                'price' => '7000',
                'image' => 'assets/images/6.jfif',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'
            ]
        ];

        return $this->products;
    }

}