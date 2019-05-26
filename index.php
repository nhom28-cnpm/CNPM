<?php

$controllerName    = $_GET['controllerName'] ?? 'home';
$action            = $_GET['action'] ?? 'index';

// tim kiem GET
$submitSearch      = $_GET['submit']   ?? false; 
if($submitSearch == true){
    $controllerName  =  'home';
    $action          =  'search';
} 

// require all file core 
require 'core/loader.php';