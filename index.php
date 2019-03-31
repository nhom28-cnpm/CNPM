<?php

$controllerName = $_GET['controllerName'] ?? 'home';
$action = $_GET['action'] ?? 'index';

require 'core/loader.php';