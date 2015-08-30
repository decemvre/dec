<?php

namespace dec\components;

class DbHelper
{
	public static function connString($db)
	{
		$connString = 'mysql://'.$db['username'].':'.$db['password'].'@localhost/'.$db['database'];
		return $connString;
	}
}