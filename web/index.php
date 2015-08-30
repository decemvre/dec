<?php
session_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once(__DIR__ . '/../vendor/autoload.php');

use dec\controllers\AppController;
use dec\components\AppFactory;





ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('../app/dec/models');
    $cfg->set_connections(array(
        'development' => 'mysql://decdb:sdr117781@localhost/decdb'));
});


$controller = isset($_GET['c']) ? $_GET['c'] : 'app';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

switch ($controller) {
	case 'app':
		$controller = AppFactory::getController($controller, $action);
		break;
	case 'user':
		$controller = AppFactory::getController($controller, $action);
		break;
	default:
		$controller = new AppController($action);
		break;
}

$controller->run($action);