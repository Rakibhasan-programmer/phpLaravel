<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Student;

$category = new Category();
$categories = $category->getAllCategories();


if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include "pages/home.php";
    }elseif ($_GET['page'] == 'add-student'){
        include "pages/add-student.php";
    }
}if(isset($_POST['btn'])){
    if($_POST['btn'] == 'Add Student'){
        //object of student class
        $student = new Student($_POST, $_FILES);
        $allStudent = $student->allStudentInfo();

    }
}
