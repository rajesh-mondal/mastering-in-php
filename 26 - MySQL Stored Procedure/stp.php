<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );
$connect = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$result = mysqli_query($connect,"CALL get_students_by_class_and_section(1,'A');");
//echo mysqli_num_rows($result);
while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}