<?php

require_once './vendor/autoload.php';
use App\classes\HelloWorld1;

$helloWorld = new HelloWorld1();
$helloWorld->printInfo();
$helloWorld->fullName();

