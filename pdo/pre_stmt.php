<?php
$pdo = new PDO( "mysql:host=127.0.0.1;port=3306;dbname=mysqlextra;charset=UTF8;", 'root', '' );
$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
$stmt = $pdo->prepare( "SELECT * from students WHERE class=? AND section=?" );

$stmt->execute( [1, 'A'] );
print_r( $stmt->fetchAll() );

$stmt->execute( [2, 'B'] );
print_r( $stmt->fetchAll() );