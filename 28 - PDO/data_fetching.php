<?php
$pdo = new PDO( "mysql:host=127.0.0.1;port=3306;dbname=mysqlextra;charset=UTF8;", 'root', '' );
if ( $pdo ) {
    $stmt = $pdo->query( "select count(*) as N from students where class=1 and section='A'" );
    print_r( $stmt->fetch( PDO::FETCH_ASSOC ) );

    //for single value
    // $total = $stmt->fetchColumn();
    // echo $total;
}