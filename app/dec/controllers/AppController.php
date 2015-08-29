<?php

namespace dec\controllers;

use dec\controllers\Controller;

class AppController extends Controller
{

	public function __construct($action)
	{
		parent::__construct(get_class($this), $action);
		$this->viewFile = __DIR__."/../views/".$this->viewsFolder.$this->view;
		$this->layoutFile = __DIR__."/../views/layouts/".$this->layout;
	}

	public function actionIndex()
	{
		// renders a view with the same name as the action, ex actionIndex renders index.php 
		// inside the folder with the same name as the Controller name, ex AppController views/app/
		$this->render([
			'test' => 'lalala'
			]);
	}

	public function actionError()
	{
		$this->render([
			'message' => 'Sorry, that page could not be found!'
			]);
	}

}