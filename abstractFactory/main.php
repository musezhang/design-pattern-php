<?php

require './factory.php';
class client
{
	public static function create()
	{
		self::createProduct(new factoryA);
		self::createProduct(new factoryB);
	}

	public static function createProduct($factory)
	{
		$productAA = $factory->getProductA();
	    $productAB = $factory->getProductB();

	    $productAA->getProductName();
	    $productAB->getProductName();
	}

}
client::create();