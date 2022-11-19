<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->category();

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include "pages/home.php";
    }else if($_GET['page'] == 'all-product'){
        $product = new Product();
        $products = $product->getProduct();
        include "pages/allProduct.php";
    }
}
