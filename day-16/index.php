<?php
require_once 'vendor/autoload.php';
use App\classes\Home;

$random = new Home();
$random->printMessage();