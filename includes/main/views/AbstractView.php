<?php

abstract class AbstractView
{

	protected $id;

	protected function __construct($id, $smarty)
	{
		$this->id = $id;
		$this->smarty = $smarty;
	}

	public function getId()
	{
		return $this->id;
	}

}
