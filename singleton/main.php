<?php
class singleton
{
    private static $object = null;

    private function __construct(){
        print_r("create object\n");
    }
    public static function getInstance()
    {
        if(self::$object === null){
            self::$object =  new singleton();
        }
        return self::$object;
    }

    private function __clone(){}
    private function __wakeup(){}
}
testSingleton();

function testSingleton(){
    $object1 = singleton::getInstance();

    $object2 = singleton::getInstance();

    var_dump($object1);
    var_dump($object2);
    $object3 = clone $object1;
    var_dump($object3);
    echo $object1 === $object2 ? "singleton\n" : "no singleton\n";

     echo $object1 === $object3 ? "not clone\n" : "clone\n";
}

