<?php

class Validation
{
	private $requiredFields = array();
	private $rulesForField = array();
	private $errors = array();

	public function setRequiredFields($fieldsName)
	{
		$this->requiredFields = $fieldsName;
	}

	public function setRule($fieldsName, $rule)
	{
		$this->rulesForField[$fieldsName] = $rule;
	}

	public function validate(array $data)
	{
		if (count($data) == 0) {
	    throw new Exception("The array of post parameters is empty");
    }

		foreach ($data as $key => $value) {
			if (in_array($key, $this->requiredFields) && empty($value)) {
				$this->errors[$key] = "field $key is required";
			}
		}

		foreach ($this->rulesForField as $key => $value) {
			if ($value == 'email') {
				if(!filter_var($data[$key], FILTER_VALIDATE_EMAIL)){
					$this->errors[$key] = "it's not correct email";
				}
			}
		}

		return (empty($this->errors)) ? true : false;

	}

	public function getErrors()
	{
		return (empty($this->errors)) ? false : $this->errors;
	}
}
