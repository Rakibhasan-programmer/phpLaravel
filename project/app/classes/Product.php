<?php


namespace App\classes;


class Product
{
    public $products;

    public function getProduct(){
        $this->products = [
            0 => [
                'id' => 1,
                'name' => "Shirt",
                'price' => '3000',
                'image' => 'shirt.webp'
            ],
            1 => [
                'id' => 2,
                'name' => "Pant",
                'price' => '2000',
                'image' => 'pant.webp'
            ],
            2 => [
                'id' => 3,
                'name' => "Sari",
                'price' => '5000',
                'image' => 'sari.webp'
            ],
            3 => [
                'id' => 4,
                'name' => "Shoe",
                'price' => '5000',
                'image' => 'shoe-w.webp'
            ],
            4 => [
                'id' => 5,
                'name' => "High Hill",
                'price' => '3000',
                'image' => 'shoe-k.webp'
            ],
            5 => [
                'id' => 6,
                'name' => "Kids Shoe",
                'price' => '3000',
                'image' => 'shoe-m.webp'
            ],
        ];

        return $this->products;
    }


}