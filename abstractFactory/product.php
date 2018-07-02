<?php
interface productA
{
	public function getProductName();
}

interface productB
{
	public function getProductName();
}


class ProductAA implements productA
{
	public function getProductName()
	{
		echo "I am Product AA" . PHP_EOL;
	}
}

class ProductAB implements productA
{
	public function getProductName()
	{
		echo "I am Product AB" . PHP_EOL;
	}
}

class ProductBA implements productB
{
	public function getProductName()
	{
		echo "I am Product BA" . PHP_EOL;
	}
}

class ProductBB implements productB
{
	public function getProductName()
	{
		echo "I am Product BA" . PHP_EOL;
	}
}