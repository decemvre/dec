<?php

namespace dec\controllers;

use dec\controllers\interfaces\ControllerInterface;
use dec\components\Url;


class Controller implements ControllerInterface
{

	// The current action, defaults to 'actionIndex';
	public $action = 'actionIndex';

	// Where the views for each child controller will be located
	protected $viewsFolder;

	// The layout used, defaults to main.php; can be changed inside each action of child classes
	protected $layout = 'main.php';

	protected $viewFile;
	protected $layoutFile;

	public function __construct($childClass, $action)
	{
		$this->view = $action.'.php';
		$this->viewsFolder = strtolower(
				str_replace("Controller", "", 
					ltrim(
						strrchr($childClass, "\\"), "\\"))) . "/";
		$this->layoutPath = __DIR__.'/../../views/layouts/';

		$this->action = 'action'.ucfirst($action);
	}


	public function run($action)
	{
		if (method_exists($this, $this->action)) {
			$methodName = $this->action;
			$this->$methodName();
		} else {
			$this->actionError();
		}
	}


	// Controller method to render views along with variables inside a layout
	public function render($variables = [])
	{
		extract($variables);
		ob_start();
		include $this->viewFile;
		$view = ob_get_clean();
		$withLayout = $this->layout($view);

		echo $withLayout;
	}

	// puts the view files inside the layout
	public function layout($viewFile)
	{
		ob_start();
		include $this->layoutFile;
		$layout = ob_get_clean();

		return $layout;
	}

	public function actionError()
	{
		header('Location: '.'http://'.$_SERVER[HTTP_HOST].Url::to('app', 'error'));
	}

}