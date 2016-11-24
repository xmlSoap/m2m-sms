<?php

require_once __DIR__ . '/AbstractView.php';


final class LoginView extends AbstractView
{
	public function __construct($smarty)
	{
		parent::__construct('login', 'Login', $smarty);
	}
}
