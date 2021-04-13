<?php
class Planet {
    public $name;

    function __construct( $name ) {
        $this->name = $name;
    }
}

$e = new Planet( "Earth" );
$e2 = $e1;
$e1 = new Planet( "Erath" );
$m = new Planet( "Mars" );

if ( $e === $e1 ) {
    echo "Similar Planets";
} else {
    echo "Not Similar";
}