<?php

require_once 'vendor/autoload.php';
use App\classes\Series;
use App\classes\Sum;

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include "pages/home.php";
    }elseif ($_GET['page'] == 'series'){
        include 'pages/series.php';
    }elseif ($_GET['page'] == 'sum'){
        include 'pages/sum.php';
    }
}elseif (isset($_POST['result_btn'])){
    $series = new Series($_POST);
    $result = $series->getSeries();
    include "pages/series.php";
}elseif (isset($_POST['sum_btn'])){
    $sum = new Sum($_POST);
    $result = $sum->getSum();
    include "pages/sum.php";
}
