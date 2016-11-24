<?php

require_once __DIR__ . '/AbstractView.php';

final class RegisterView extends AbstractView
{

	public function __construct($smarty)
    {
        parent::__construct('register', 'Register', $smarty);
    }
}
