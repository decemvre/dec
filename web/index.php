<?php


require(__DIR__ . '/../vendor/autoload.php');

use dec\controllers\AppController;
use dec\components\AppFactory;


$controller = isset($_GET['c']) ? $_GET['c'] : 'app';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

switch ($controller) {
	case 'app':
		$controller = AppFactory::getController($controller, $action);
		break;
	default:
		$controller = new AppController($action);
		break;
}

$controller->run();