<?php
class helper {

	public static function url($controllerName, $action){
		echo "index.php?controllerName=$controllerName&action=$action";
	}
    public static function getUrl($controllerName, $action){
		return "index.php?controllerName=$controllerName&action=$action";
	}
	public static function redirect($controllerName, $action){
		header("location: index.php?controllerName=$controllerName&action=$action");
	}
	
}
?>