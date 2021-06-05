<?php
$pdo = new PDO( "mysql:host=127.0.0.1;port=3306;dbname=mysqlextra;charset=UTF8;", 'root', '' );
$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
$stmt = $pdo->prepare( "SELECT sex, name, roll FROM students WHERE class=? AND section=?" );

$stmt->execute( [2, 'B'] );

$data = $stmt->fetchAll( PDO::FETCH_GROUP );
echo "Total Males " . count( $data['M'] ) . "\n";
echo "Total Females " . count( $data['F'] ) . "\n";