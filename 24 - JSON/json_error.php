<?php
$json = "{\"country\":\"বাংলাদেশ\"}";
//$json = "{'country':'বাংলাদেশ'}"; // error syntex
print_r( json_decode( $json, 1 ) );
echo json_last_error_msg();
