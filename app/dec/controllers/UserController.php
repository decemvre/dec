<?php

namespace dec\controllers;

use dec\controllers\Controller;
use dec\controllers\interfaces\ControllerInterface;
use dec\models\User;


class UserController extends Controller
{

	public function __construct($action)
	{
		parent::__construct(get_class($this), $action);
		$this->viewFile = __DIR__."/../views/".$this->viewsFolder.$this->view;
		$this->layoutFile = __DIR__."/../views/layouts/".$this->layout;
	}

	public function actionRegister()
	{

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			var_dump($_POST); exit;
			$this->redirect('user', 'welcome');
		}


		$model = new User();

		$this->render([
			'model' => $model
			]);
	}

	public function actionLogin()
	{
		# code...
	}

	public function actionWelcome()
	{
		$this->render([

			]);
	}
}