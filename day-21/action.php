<?php

require_once 'vendor/autoload.php';

use App\classes\CharacterCount;
use App\classes\WordCount;

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include "pages/home.php";
    }elseif($_GET['page'] == 'character-count'){
        include 'pages/character-count.php';
    }elseif($_GET['page'] == 'word-count'){
        include 'pages/word-count.php';
    }
}elseif (isset($_POST['character_count_btn'])){
    if($_POST['character_count_btn']){
        $characterCount = new CharacterCount($_POST);
        $result = $characterCount->getSentence();
        include 'pages/character-count.php';
    }
}elseif (isset($_POST['word_count_btn'])){
    if($_POST['word_count_btn']){
        $wordCount = new WordCount($_POST);
        $result = $wordCount->getSentence();
        include 'pages/word-count.php';
    }
}
