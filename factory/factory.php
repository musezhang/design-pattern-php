<?php
require './product.php';

interface factory{
	public function getProduct();
}

class factoryA implements factory
{
	public function getProduct()
	{
		return new ProductA();
	}
}

class factoryB implements factory
{
	public function getProduct()
	{
		return new ProductB();
	}
}

class factoryC implements factory
{
	public function getProduct()
	{
		return new ProductB();
	}
}