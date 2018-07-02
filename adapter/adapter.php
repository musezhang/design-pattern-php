<?php

interface language
{
	public function sayChinese();
	public function sayEnglish();
}

class adaptee
{
	public function sayChinese()
	{
		echo "你好\n";
	}
}

class Adapter extends adaptee implements language
{
	public function sayEnglish()
	{
		echo "hello\n";
	}
}


class Adapter2 implements language{
	private $adaptee;

	public function __construct($adaptee)
	{
		$this->adaptee = $adaptee;
	}

	public function sayChinese()
	{
		$this->adaptee->sayChinese();
	}

	public function sayEnglish()
	{
		echo "hello\n";
	}
}