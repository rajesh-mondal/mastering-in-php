<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM students WHERE class=? AND section=?" );

$class = 1;
$section = 'A';

$stmt->bind_param( 'is', $class, $section );
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_all( MYSQLI_ASSOC );
print_r( $data );

// while($data = $result->fetch_assoc()){
//     print_r($data);
// }

// fetching as object
// while($data = $result->fetch_object()){
//     print_r($data);
// }

$stmt->close();