<?php
//Copy by value
$person = array( 'fname' => 'Hello', 'lname' => 'World' );
$newperson = $person;
$newperson['lname'] = 'Pluto';

print_r( $person );
print_r( $newperson );
print PHP_EOL;

//Copy by reference
$person = array( 'fname' => 'Hello', 'lname' => 'World' );
$newperson = &$person; // & sign for showing call by reference
$newperson['lname'] = 'Pluto';

print_r( $person );
print_r( $newperson );
print PHP_EOL; // new line

//Another example
function printData( $person ) {
    $person['fname'] .= " Changed";
    print_r( $person );
}

printData( $person );
print_r( $person );