<?php
require 'create_fruit.php';
$fruitName = isset($argv[1]) ? $argv[1] : "";

try
{

    if(empty($fruitName))
    {
    	throw new Exception("must choose fruit");
    }
    $fruit = fruitFactory::createFruit($fruitName);
    $fruit->getFruit();
}
catch(Exception $e)
{
    echo $e->getMessage() . PHP_EOL;
}
