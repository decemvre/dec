<?php

namespace dec\controllers;

use dec\controllers\Controller;

class AppController extends Controller
{

	public function __construct($action)
	{
		parent::__construct(get_class($this), $action);
	}


	// renders a view with the same name as the action, ex actionIndex renders index.php 
	// inside the folder with the same name as the Controller name, ex AppController views/app/
	public function actionIndex()
	{
		$this->render();
	}

	public function actionAbout()
	{
		$this->render();
	}

	public function actionContact()
	{
		$this->render();
	}


	public function actionError()
	{
		$this->render('error.php', [
			'message' => 'Sorry, that page could not be found!'
			]);
	}

}