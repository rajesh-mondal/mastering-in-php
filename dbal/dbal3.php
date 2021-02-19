<?php
require "vendor/autoload.php";

$connectionParams = array(
    'dbname'   => 'dbal',
    'user'     => 'root',
    'password' => '',
    'host'     => 'localhost',
    'driver'   => 'mysqli',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams );
try {
    if ( $conn->connect() ) {
        echo "Connected";
        //$result = $conn->query("SELECT * FROM students WHERE section='A' AND class=1");
        $result = $conn->executeQuery( "SELECT * FROM students WHERE section=? AND class=?", array( 'A', 1 ) );
        /*while($data = $result->fetch()){
        print_r($data);
        } */
        print_r( $result->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "Failed";
}