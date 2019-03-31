<?php

class controller {

	public function loadView($viewName, $data = []) {

		foreach ($data as $key => $value) {
			$this->{$key} = $value;
		}

		require 'view/' . $viewName . '.php';
	}

	public function load($className) {
		require 'core/' . $className . '.php';
		$this->{$className} = new $className();
	}
}

?>