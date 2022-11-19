<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--    bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--    external css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .h-300{
            height: 300px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
            <a href="" class="navbar-brand fw-bold">LOGO</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="action.php?page=home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="action.php?page=all-product" class="nav-link">ALl Product</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categories as $category) { ?>
                                <li><a class="dropdown-item" href="#"><?php echo $category['name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
