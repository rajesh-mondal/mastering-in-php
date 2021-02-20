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
$qb = $conn->createQueryBuilder();
try {
    if ( $conn->connect() ) {
        $qb->update( 'persons' )
            ->set( 'email', '?' )
            ->where( 'id=?' )
            ->setParameter( 1, 'jimmy@jimmy.com' )
            ->setParameter( 2, 6 )
            ->execute();
    }
} catch ( Exception $e ) {
    echo "Failed";
}