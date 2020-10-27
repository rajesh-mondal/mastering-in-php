<?php
define( 'OK', 123 );

class MyClass {
    const CITY = "Khulna";

    function sayHi() {
        echo "Hi From " . self::CITY . "\n";
    }
}

$m = new MyClass();
$m->sayHi();
echo MyClass::CITY;