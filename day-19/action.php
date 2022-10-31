<?php

require_once 'vendor/autoload.php';

use App\classes\FullName;

//$result = '';
if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include "pages/home.php";
    }elseif ($_GET['page'] == 'full-name'){
        include 'pages/fullName.php';
    }elseif ($_GET['page'] == 'calculator'){
        include 'pages/calculator.php';
    }
}elseif (isset($_POST['full_name_btn'])){
    $fullName = new FullName($_POST);
    $result = $fullName->getFullName();
    include 'pages/fullName.php';
}
