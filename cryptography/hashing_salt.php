<?php
//Hashing Salt
$salt = "Th1s1s@S@lt";
$password = "Secret Password";
$hash = md5($password.$salt);
echo $hash."\n";
//4d59047315ee9fbcc547259f06d51dfb

$userInput = "Secret Password";
if(md5($userInput.$salt)=="4d59047315ee9fbcc547259f06d51dfb"){
    echo "Password Correct";
}else{
    echo "Password Incorrect";
}