<?php
/*
 *Load all file core vào index.php
 * đồng thời tạo ra các đối tượng
 * vd: class database từ file database.php
 * $database = new database();
 */
include 'config/config.php';
foreach ($autoload as $file) {
	include 'core/' . $file . '.php';
	$$file = new $file();
}
/*
 *Load all file model
 *
 */
foreach ($autoloadModel as $file) {
	include 'model/' . $file . '.php';
}
/*
 *Load file controller từ biến global $_GET['controllerName'] truyền vào từ URL
 */
if (file_exists('controller/' . $controllerName . '.php')) {
	include 'controller/' . $controllerName . '.php';
} else {
	echo ('File Not Found !!');
}
/*
 *Tạo đối tượng file vừa load từ controller
 */

$controller = new $controllerName();

/*
 *Gọi method từ biến action truyền vào từ URL
 */

if (method_exists($controller, $action)) {
	$controller->$action();
} else {
	echo "Method not Found";
}