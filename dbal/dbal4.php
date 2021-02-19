<?php
//Doctrine/DBAL Prepared Statement
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
        $statement = $conn->prepare( "SELECT * FROM students WHERE  section=? AND class=?" );
        /* //bind value
        $statement->bindValue( 1, 'A' );
        $statement->bindValue( 2, 1 );
        $statement->execute(); 
        */

        //Bind Param
        $class = 1;
        $section = 'A';
        $statement->bindParam( 1, $section );
        $statement->bindParam( 2, $class );
        $statement->execute();

        /* Another Way
        $result = $conn->executeQuery( "SELECT * FROM students WHERE section=? AND class=?", array( 'A', 1 ) );
        print_r( $result->fetchAll() );
        */

        print_r( $statement->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "Failed";
}