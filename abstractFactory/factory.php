<?php
require './product.php';

interface abstractFactory
{
	public function getProductA();

	public function getProductB();
}

class factoryA implements abstractFactory
{
	public function getProductA()
	{
		return new ProductAA();
	}
	public function getProductB()
	{
		return new ProductAB();
	}
}

class factoryB implements abstractFactory
{
	public function getProductA()
	{
		return new ProductBA();
	}
	public function getProductB()
	{
		return new ProductBB();
	}
}