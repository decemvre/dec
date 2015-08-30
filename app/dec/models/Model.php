<?php
namespace dec\models;

use dec\models\Model;

class Model
{

	public $errors = [];


	public function className()
	{
		return ltrim(strrchr(get_class($this), "\\"), "\\");
	}



    public function load($postData)
    {
    	$attr = 0;
    	foreach ($postData[$this->className()] as $key => $value) {
    		if (property_exists($this, $key)) {
	    		$this->$key = $value;
	    		$attr++;
    		}
    	}
    	if ($attr > 0) {
    		return true;
    	}
    	return false;
    }

    public function rules()
    {
    }

    public function validate()
    {

    	$attributes = $this->rules();

    	foreach ($attributes as $attribute => $rule) {
    		$result = call_user_method($rule, $this, $this->$attribute);
    		if (!$result) {
    			switch ($rule) {
    				case 'name':
		    			$this->errors[$attribute] = "Name must contain only lowercase and uppercase letters.";
		    			break;
    				case 'email':
		    			$this->errors[$attribute] = "Email must be a valid email address.";
		    			break;
    				case 'password':
		    			$this->errors[$attribute] = "Password must be at least 9 characters long.";
		    			break;
    				default:
		    			$this->errors[$attribute] = "There was an error with your input for $attribute. Please review your submission form.";
		    			break;
    			}
    		}
    		unset($result);
    	}
    	return !$this->hasErrors();
    }


	// Validators
    public function name($string)
    {	
    	if (true) {
    		return true;
    	}
    	return false;
    }

    public function email($email)
    {
	    if(filter_var((string)$email, FILTER_VALIDATE_EMAIL)) {
	        return true;
	    }
	    return false;
    }

    public function password($password)
    {
    	$length = strlen($password);
    	if ($length >= 9) {
    		return true;
    	}
    	return false;
    }

    public function hasErrors()
    {
    	if (!empty($this->errors)) {
    		return true;
    	} else {
    		return false;
    	}
    }
}
