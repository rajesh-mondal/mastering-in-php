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
        $query = "SELECT * FROM students WHERE section='A' AND class=1";
        //$data = $conn->fetchArray($query); //fetch array
        $data = $conn->fetchAssoc($query); //fetch assoc
        print_r($data);
    }
} catch ( Exception $e ) {
    echo "Failed";
}