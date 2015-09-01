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
	}

	public function actionRegister()
	{
		$model = new RegisterForm();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$_SESSION['name'] = $_POST['RegisterForm']['name'];
			$_SESSION['email'] = $_POST['RegisterForm']['email'];
			$_SESSION['password'] = $_POST['RegisterForm']['password'];

			if ($model->load($_POST) && $model->validate()) {
				if ($user = $model->register()) {
					if ($user->login()) {

						unset($_SESSION['name']);
						unset($_SESSION['email']);
						unset($_SESSION['password']);

						$this->render('welcome.php', [
							'model' => $user
							]);
						return;
					}
				} else {
					$model->errors['error'] = "Something went wrong and we could not save your details to the database. Please try again later.";
				}
			}
		}

		$model->name = (isset($_SESSION['name']))?$_SESSION['name']:"";
		$model->email = (isset($_SESSION['email']))?$_SESSION['email']:"";
		$model->password = (isset($_SESSION['password']))?$_SESSION['password']:"";

		$this->render('register.php', [
			'model' => $model
			]);
	}

	public function actionLogin()
	{
	}

	public function actionWelcome()
	{
		$this->render();
	}
}