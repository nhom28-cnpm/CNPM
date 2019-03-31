<?php
require('config/system.php');
require('config/autoload.php');

// require('vendor/autoload.php');

// Load core classes
foreach($autoload as $file){
	require('core/'.$file.'.php');
	$$file = new $file();
}

// Load models
foreach($autoloadModels as $file){
	require('model/'.$file.'.php');
}

// require controller

if (file_exists('controller/'.$controllerName.'.php')){
	require('controller/'.$controllerName.'.php');
}
else {
	echo 'Page not found';
}


// Create controller
$controller = new $controllerName();

if ( method_exists($controller, $action) ){
	$controller->$action();
}
else {
	echo 'Page not found';
}

?>