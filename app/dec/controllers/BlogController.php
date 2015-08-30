<?php

namespace dec\controllers;

use dec\controllers\Controller;

class BlogController extends Controller
{

	public function __construct($action)
	{
		parent::__construct(get_class($this), $action);
		$this->viewFile = __DIR__."/../views/".$this->viewsFolder.$this->view;
		$this->layoutFile = __DIR__."/../views/layouts/".$this->layout;
	}

	public function actionIndex()
	{
		$this->render();
	}

}