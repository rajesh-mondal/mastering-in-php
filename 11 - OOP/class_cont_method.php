<?php
//Class Constructor Method
class Human {
    public $name;
    public $age;

    function __construct( $personName, $personAge = 0 ) {
        //echo "New Human object is created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi() {
        echo "Hi\n";
        $this->sayName();
    }

    function sayName() {
        if ( $this->age ) {
            echo "My name is {$this->name}, I am {$this->age} years old\n";
        } else {
            echo "My name is {$this->name}, I dont know how old I am\n";
        }
    }
}

$h1 = new Human( "Khan", 22 );
$h2 = new Human( "Rajesh", 25 );
$h3 = new Human( "Rakhi" );
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();