<?php
$color = array( 122, 233, 65 );
//$red = $color[0];
//$green = $color[1];
//$blue = $color[2];

list( $red, $green, $blue ) = $color;
//list( $red, $green, $blue ) = array( 122, 233, 65 ); //this also give correct output
echo $blue;
echo PHP_EOL; // new line

//Another Example
$student = array( 'Rajesh', 'Mondal', '25', 'CSE' );
list( $fName, $lName, $age, $dept ) = $student;
echo $age;