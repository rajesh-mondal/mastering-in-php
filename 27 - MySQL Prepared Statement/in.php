<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM students WHERE class=? AND section IN (?, ?)" );

$class = 1;
$section1 = 'A';
$section2 = 'B';
$stmt->bind_param( 'iss', $class, $section1, $section2 );
$stmt->execute();

print_r( $stmt->get_result()->num_rows );

$stmt->close();