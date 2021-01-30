<?php
//$data = $_GET; //for get and put request
//$data = $_POST; //for post request
$data = $_REQUEST;
$data['result'] = 'success';
$data['method'] = $_SERVER['REQUEST_METHOD']; //for delete req
echo json_encode( $data, JSON_PRETTY_PRINT );