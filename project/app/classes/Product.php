<?php


namespace App\classes;


class Product
{
    public $products, $allProduct, $sortProduct = [], $categorySort = [];

    public function getProduct(){
        $this->products = [
            0 => [
                'id' => 1,
                'category' => 'Men Fashion',
                'name' => "Shirt",
                'price' => '3000',
                'desc' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'image' => 'shirt.webp'
            ],
            1 => [
                'id' => 2,
                'category' => 'Men Fashion',
                'name' => "Pant",
                'price' => '2000',
                'desc' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'image' => 'pant.webp'
            ],
            2 => [
                'id' => 3,
                'category' => 'Women Fashion',
                'name' => "Sari",
                'price' => '5000',
                'desc' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'image' => 'sari.webp'
            ],
            3 => [
                'id' => 4,
                'category' => 'Men Fashion',
                'name' => "Shoe",
                'price' => '5000',
                'desc' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'image' => 'shoe-w.webp'
            ],
            4 => [
                'id' => 5,
                'category' => 'Women Fashion',
                'name' => "High Hill",
                'price' => '3000',
                'desc' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'image' => 'shoe-k.webp'
            ],
            5 => [
                'id' => 6,
                'category' => 'Kids Fashion',
                'name' => "Kids Shoe",
                'price' => '3000',
                'desc' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'image' => 'shoe-m.webp'
            ],
        ];

        return $this->products;
    }

    public function getProductDetails($id)
    {
        $this->allProduct = $this->getProduct();
        foreach ($this->allProduct as $product){
            if($product['id'] == $id)
            {
               array_push($this->sortProduct, $product);
            }
        }

        return $this->sortProduct;
    }

    // category wise product
    public function getCategoryProduct($name)
    {
        $this->allProduct = $this->getProduct();
        foreach($this->allProduct as $product)
        {
            if($product['category'] == $name){
                array_push($this->categorySort, $product);
            }
        }

        return $this->categorySort;
    }


}