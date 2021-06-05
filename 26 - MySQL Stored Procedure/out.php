<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'mysqlextra' );
$connect = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );
mysqli_query($connect,"CALL get_mfc_cs(1,'A',@tf, @tm);");
$result = mysqli_query($connect,"SELECT @tm as TotalMale, @tf as TotalFemale;");
//echo mysqli_num_rows($result);
while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}
