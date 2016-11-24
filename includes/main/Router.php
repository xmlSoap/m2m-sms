<?php

require_once 'H:/p3t/phpappfolder/public_php/m2m-sms/smarty/libs/Smarty.class.php';

require_once 'H:/p3t/phpappfolder/public_php/m2m-sms/includes/main/views/IndexView.php';
require_once 'H:/p3t/phpappfolder/public_php/m2m-sms/includes/main/views/RegisterView.php';
require_once 'H:/p3t/phpappfolder/public_php/m2m-sms/includes/main/views/RegisteredView.php';
require_once 'H:/p3t/phpappfolder/public_php/m2m-sms/includes/main/views/LoginView.php';

final class Router
{
	private $path = 'index';

    public function __construct()
    {
        if (isset($_GET['action'])) {
            $this->path = $_GET['action'];
        }
    }

    public function route()
	{
		$view = null;
		$exception = null;

		$smarty = new Smarty();
		$smarty->setTemplateDir(__DIR__ . '/layouts');
		$smarty->setCompileDir(__DIR__ . '/../../smarty/compiled_templates');
		$smarty->setCacheDir(__DIR__ . '/../../smarty/cache');

		switch ($this->path) {
			case 'index':
				$view = new IndexView($smarty);
				break;

            case 'register':
                $view = new RegisterView($smarty);
                break;

            case 'login':
                $view = new LoginView($smarty);
                break;

			default:
				$this->path = 'index';
				$view = new IndexView($smarty);
				break;
		}
		$smarty->display($view->getId() . '.tpl');
	}
}