<?php
session_start();

// Displaying errors in production mode is very bad
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once(__DIR__ . '/../vendor/autoload.php');

use dec\controllers\AppController;
use dec\components\AppFactory;
use dec\components\DbHelper;

ActiveRecord\Config::initialize(function($cfg)
{
  require_once __DIR__.'/../app/dec/config/db.php';
  $connString = DbHelper::connString($db);
    $cfg->set_model_directory('../app/dec/models');
    $cfg->set_connections(array(
        'development' => $connString));
});

$controller = isset($_GET['c']) ? $_GET['c'] : 'app';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

$controller = AppFactory::getController($controller, $action);

$controller->run();