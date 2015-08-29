<?php

namespace dec\components;

use dec\controllers\AppController;
use dec\controllers\UserController;

class AppFactory
{
	public static function getController($controller, $action)
	{
		switch ($controller) {
			case 'app':
				return new AppController($action);
				break;
			case 'user':
				return new UserController($action);
				break;
			default:
				return new AppController($action);
		}
	}
}