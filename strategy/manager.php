<?php

class manager{
	private $sport;
	public function __construct($sport)
	{
		$this->sport = $sport;
	}

	public function playsports()
	{
		$this->sport->play();
	}
}