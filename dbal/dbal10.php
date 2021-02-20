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
        $qb->select( '*' )
            ->from( 'students' )
            ->where( 'class=? and section=?' )
            ->orWhere( 'class=? and section=?' )
            ->setParameter( 1, 1 )
            ->setParameter( 2, 'A' )
            ->setParameter( 3, 2 )
            ->setParameter( 4, 'B' );

        echo $qb->getSQL();
        print_r( $qb->execute()->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "Failed";
}