<?php

require_once "vendor/autoload.php";

use App\classes\Blog;

if($_GET['page'] == 'home'){
    include 'pages/home.php';
}elseif ($_GET['page'] == 'all-blogs'){
    $blog = new Blog();
    $blogs = $blog->allBlogs();
    include 'pages/blogs.php';
}elseif ($_GET['page'] == 'details'){
    $blog = new Blog();
    $details = $blog->getDetails($_GET['id']);
    include 'pages/blogDetails.php';
}
