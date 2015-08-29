<?php

namespace dec\components;

use dec\controllers\AppController;

class AppFactory
{
	public static function getController($controller)
	{
		switch ($controller) {
			case 'app':
				return new AppController();
				break;
			case 'user':
				return new UserController();
				break;
			default:
				return new AppController();
		}
	}
}