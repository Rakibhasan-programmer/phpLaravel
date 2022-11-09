<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;
use App\classes\Auth;

$product = new Product();
$category = new Category();
$categories = $category->getAllCategories();

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $products = $product->getALlProduct();
        include "pages/home.php";
    }elseif ($_GET['page'] == 'add-product'){
        include "pages/add-product.php";
    }elseif ($_GET['page'] == 'category'){
        $products = $product->getCategoryWiseProduct($_GET['category_id']);
        include "pages/category.php";
    }elseif ($_GET['page'] == 'login'){
        include "pages/login.php";
    }elseif ($_GET['page'] == 'register'){
        include "pages/register.php";
    }
}elseif (isset($_POST['btn'])){
    if($_POST['btn'] == 'Add Product'){
        $product = new Product($_POST, $_FILES);
        $products = $product->getProduct();
        include 'pages/add-product.php';
    }elseif ($_POST['btn'] == "Login"){
        $auth = new Auth($_POST);
        $message = $auth->login();
        include "pages/login.php";
    }
}
