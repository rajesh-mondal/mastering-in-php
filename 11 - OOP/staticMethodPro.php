<?php
//Class Ststic Method and Propertise
class MathCalculator {
    private $number;
    static $name;
    static function fibonacci( $n ) {
        echo self::$name . "\n";
        self::doSomething();
        self::$name = 12; // for accesing in static method
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething() {
        echo "Doing Something\n";
    }

    function factorial( $n ) {
        self::$name = "ABCD";
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculating factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial( 8 );

MathCalculator::fibonacci( 7 );
echo MathCalculator::$name;