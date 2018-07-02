<?php
interface Fruit
{
    public function getFruit();
}

class Apple implements Fruit
{
    public function getFruit()
    {
        echo 'I am Apple' . PHP_EOL;
    }
}

class Pear implements Fruit
{
    public function getFruit()
    {
        echo 'I am Pear' . PHP_EOL;
    }
}

class Banana implements Fruit
{
    public function getFruit()
    {
        echo 'I am Banana' . PHP_EOL;
    }
}
