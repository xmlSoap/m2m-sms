<?php

abstract class AbstractView
{

	protected $id;

    protected $title;

    protected $smarty;

	protected function __construct($id, $title, $smarty)
	{
		$this->id = $id;
        $this->title = $title;
		$this->smarty = $smarty;
	}

	public function getId()
	{
		return $this->id;
	}

}
