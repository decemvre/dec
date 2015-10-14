<?php

namespace dec\components;

use dec\controllers\AppController;
use dec\controllers\UserController;
use dec\controllers\BlogController;
use dec\controllers\FeedController;

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
			case 'blog':
			return new BlogController($action);
			break;
			case 'feed':
			return new FeedController($action);
			break;
			default:
			return new AppController($action);
		}
	}
}