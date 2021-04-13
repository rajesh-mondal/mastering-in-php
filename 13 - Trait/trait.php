<?php
trait MyTrait {
    static $number;
    abstract function sayHi();
}

class MyClassA {
    use MyTrait;

    function sayHi() {
        echo "\nHi";
    }
}

class MyClassB {
    use MyTrait;

    function sayHi() {
        echo "\nHi++";
    }
}

MyClassA::$number = 2;
MyClassB::$number = 8;
echo MyClassA::$number;

$ma = new MyClassA();
echo $ma::$number;

echo MyClassB::$number;