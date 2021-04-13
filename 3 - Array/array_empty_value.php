<?php
//Empty Value
$name = '';

if ( isset( $name ) ) {
    echo "Name is set";
} else {
    echo "Not set";
}
echo "\n";

//Another way
if ( empty( $name ) ) {
    echo "Name is set";
} else {
    echo "Not set";
}
echo "\n";
//Set but not empty
if ( isset( $name ) && ( is_numeric( $name ) || $name != '' ) ) {
    echo "Name is set and not empty";
} else {
    echo "Name is either not set or it's empty";
}