<?php
//error_reporting(0);
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );
$connect = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$queries = [];
for ( $class = 1; $class <= 10; $class++ ) {
    foreach ( ['A', 'B', 'C', 'D'] as $section ) {
        $queries[] = "SET @roll=0; UPDATE students SET roll=@roll:=@roll+1 WHERE class={$class} AND section='{$section}';";
    }
}
echo join( '', $queries );
$result = mysqli_multi_query( $connect, join( '', $queries ) );
if ( mysqli_error( $connect ) ) {
    echo mysqli_error(  ( $connect ) );
}