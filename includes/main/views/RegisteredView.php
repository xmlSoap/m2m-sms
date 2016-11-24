<?php

require_once __DIR__ . '/AbstractView.php';

final class RegisteredView extends AbstractView
{

	public function __construct($smarty)
	{
		parent::__construct('registered', 'Registered', $smarty);
	}

}
