<?php

namespace dec\models;

use ActiveRecord;
// use dec\models\interfaces\UserInterface;

class User 
{
	public $name;
	public $email;

	// please allow VARCHAR(255) for password hashiing because default algorithms do change :D
	public $password_hash;
	public $remember;


	// public function rules()
	// {
	// 	return [
	// 		['name' => 'string'],
	// 		['email' => 'email'],
	// 		['password' => 'password'],
	// 	];
	// }


    public static function tableName()
    {
        return 'user';
    }

    public function setPassword($password)
    {
        $this->password_hash = self::generatePasswordHash($password);
    }

    public static function generatePasswordHash($password, $cost = 13)
    {
    	return password_hash($password, PASSWORD_DEFAULT, ['cost' => $cost])
    }

}