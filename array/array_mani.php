<?php
//array manipulation
$students = [
    "rahim",
    "karim",
    123,
    "monir",
];

$students[2] = "Shafiq"; //for modifying array or replacing element
/*
$n = count($students);
for($i=0; $i<$n; $i++){
echo $students[$i]."\n";
}
 */
//Array pop - for removing last element
$student = array_pop( $students );

//Array Shift - for removing first element of array
$student = array_shift( $students );
//echo $student."\n";

//Array push - for adding element in last position of array
$students[] = "Jamal";
array_push( $students, "Kamal" );

//Array unshift - for adding element in first position of array
array_unshift( $students, "Salam" );

$n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}
