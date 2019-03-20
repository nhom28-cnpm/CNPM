<?php
/*
 *Lấy value từ URL
 */
$controllerName = $_GET['controllerName'] ?? 'home';
$action = $_GET['action'] ?? 'index';
/*
 *Load loadfile.php
 */
include 'core/loadFile.php';
$database->index();
