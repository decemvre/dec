<?php

namespace dec\controllers;

use dec\controllers\Controller;
use dec\controllers\interfaces\ControllerInterface;
use dec\models\RegisterForm;
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
		$model = new RegisterForm();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if ($model->load($_POST) && $model->validate()) {
				if ($user = $model->register()) {
					if ($user->login()) {
						$this->render([
							'model' => $user
							], 'welcome.php');
						return;
					}
				} else {
					$model->errors['error'] = "Something went wrong and we could not save your details to the database. Please try again later.";
				}
			}
		}

		$this->render([
			'model' => $model
			]);
	}

	public function actionLogin()
	{
	}

	public function actionWelcome()
	{
		$this->render([

			]);
	}
}