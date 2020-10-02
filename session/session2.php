<?php
session_name( 'myapp' );
session_start();
$_SESSION['name'] = 'Ruby';
echo $_SESSION['name'];