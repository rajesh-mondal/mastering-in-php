<?php
// Class, Object, Method, Property
class Human {
    public $name;
    function sayHi() {
        echo "Salam\n";
        $this->sayName();
    }
    function sayName() {
        echo "My name is {$this->name}\n";
    }
}

class Cat {
    function sayHi() {
        echo "Meaw\n";
    }
}

class Dog {
    function sayHi() {
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel\n"; //set operation
$h2->name = "Rajesh\n";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
//$h1->sayName();
//echo $h1->name; // get operation
//$c1->sayHi();

$h2->sayHi();
//$h1->sayName();
//echo $h1->name; // get operation
//$c1->sayHi();