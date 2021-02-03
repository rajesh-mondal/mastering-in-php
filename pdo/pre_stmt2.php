<?php
//prepared statement using using exclusivly binding
$pdo = new PDO( "mysql:host=127.0.0.1;port=3306;dbname=mysqlextra;charset=UTF8;", 'root', '' );
$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
$stmt = $pdo->prepare( "SELECT * from students WHERE class=? AND section=?" );

//bind param
$class = 1;
$section = 'A';
$stmt->bindParam( 1, $class, PDO::PARAM_INT );
$stmt->bindParam( 2, $section, PDO::PARAM_STR );

$stmt->execute();
$class = 2;

$stmt->execute();
print_r( $stmt->fetchAll() );

//bind value
//$stmt->bindValue(2,'A',PDO::PARAM_INT);
//print_r($stmt->fetchAll());
