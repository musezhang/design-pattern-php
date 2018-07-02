<?php
require "fruit.php";

class fruitFactory
{
    public static function createFruit($fruitName)
    {
        $className = ucfirst($fruitName);
        if(class_exists($className))
        {
            return new $className;
        }
        else
        {
            throw new Exception('we can not create fruit [' . $fruitName . ']');
        }
    }
}

