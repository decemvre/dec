<?php

namespace dec\models;

use ActiveRecord;
// use dec\models\interfaces\UserInterface;

class User
{
	public $name;
	public $email;
	public $password;


    public static function tableName()
    {
        return 'user';
    }

	public function validate()
	{
		
	}


	public function register()
	{
		
	}

}