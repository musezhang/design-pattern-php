<?php

interface product
{
	public function getProductName();
}

class productA implements product
{
	public function getProductName()
	{
		echo "I am product A" . PHP_EOL;
	}
}

class productB implements product
{
	public function getProductName()
	{
		echo "I am product B" . PHP_EOL;
	}
}

class productC implements product
{
	public function getProductName()
	{
		echo "I am product C" . PHP_EOL;
	}
}