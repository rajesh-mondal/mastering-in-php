<?php
class A {
    public static $name;
    static function sayHi() {
        self::$name = "Hello\n";
        echo "Hi From A\n";
    }
}

class B extends A {
    static function sayHi() {
        echo "Hi From B\n";
        parent::sayHi();
    }
}

B::sayHi();
//echo B::$name;