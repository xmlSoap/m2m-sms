<?php

require_once __DIR__ . '/AbstractView.php';

final class IndexView extends AbstractView
{

	public function __construct($smarty)
	{
		parent::__construct('index', $smarty);
	}
}
