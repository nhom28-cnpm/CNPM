<?php

class validation {
	public $errors = [];

	public function validate($rules = []){
		foreach ($rules as $field => $rules) {
			$this->validateSingleField($field, $rules);
		}
		return $this->errors;
	}

	public function validateSingleField($field, $rules){
		foreach ($rules as $methodName => $value) {
			if (method_exists($this, $methodName)){
				$this->$methodName($field, $value);
			}
		}
	}

	protected function min_length($field, $number){
		if (strlen(input::post($field)) < $number){
			$this->errors[] = "Min length of $field is $number characters";
		}
	}

	protected function max_length($field, $number){
		if (strlen(input::post($field)) > $number){
			$this->errors[] = "Max length of $field is $number characters";
		}
	}

	protected function is_number($field, $optional) {
		if ( ! is_numeric(input::post($field)) ){
			$this->errors[] = "$field must be a number";
		}
	}

}

?>