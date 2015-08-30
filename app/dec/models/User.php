<?php

namespace dec\models;

use ActiveRecord;

class User extends ActiveRecord\Model
{

	public static $primary_key = 'id';
	public static $table_name = 'user';


    public function setPassword($password)
    {
        $this->password_hash = self::generatePasswordHash($password);
    }

    public static function generatePasswordHash($password, $cost = 13)
    {
    	return password_hash($password, PASSWORD_DEFAULT, ['cost' => $cost]);
    }

    public function login()
    {
        return true;
    }

}