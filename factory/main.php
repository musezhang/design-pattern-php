<?php
require './factory.php';

try
{
	//生成产品A
	$factory = new factoryA();
	$product = $factory->getProduct();
	$product->getProductName();

	//生成产品B
	$factory = new factoryB();
	$product = $factory->getProduct();
	$product->getProductName();
}
catch(Exception $e)
{
	echo $e->getMessage() . PHP_EOL;
}