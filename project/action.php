<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->category();

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }else if($_GET['page'] == 'all-product')
    {
        // all product
        $product = new Product();
        $products = $product->getProduct();
        include "pages/allProduct.php";
    }else if($_GET['page'] == 'product-details')
    {
        $product = new Product();
        $products = $product->getProductDetails($_GET['id']);
       include "pages/productDetails.php";
    }else if($_GET['page'] == 'category-product')
    {
        // category wise product
        $categoryProduct = new Product();
        $products = $categoryProduct->getCategoryProduct($_GET['id']);
        include 'pages/categoryProduct.php';
    }
}
