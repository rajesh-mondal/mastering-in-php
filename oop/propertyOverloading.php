<?php
Class MOtorCycle {
    private $parameters;
    function __construct( $displacement, $capacity, $mileage ) {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    // function getDisplacement(){
    //     return $this->parameters['displacement'];
    // }

    // function setDisplacement( $displacement ){
    //     $this->parameters['displacement'] = $displacement;
    // }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} not found";
            return false;
        }
        return true;
    }

    function __get( $name ) {
        echo $this->parameters[$name]; //$this->displacement
    }

    function __set( $name, $value ) {
        echo $this->parameters[$name] = $value; //$this->displacement
    }
}

$pulsar = new MOtorCycle( '150cc', '16ltr', '40kmph' );

if ( isset( $pulsar->tiresize ) ) {
    echo "Found";
} else {
    echo "Not Found";
}
