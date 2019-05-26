<?php

class input {

	public function post($name){
		return ( $_POST[$name] ?? null );
	}

	public function get($name){
		return ( $_GET[$name] ?? null );
	}

	public function has($name){
		return isset( $_POST[$name] );
	}

}

?>