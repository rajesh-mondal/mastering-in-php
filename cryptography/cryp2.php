<?php
//Hashing
$password = "Secret Password";
$hash = md5($password);
//echo $hash;
//df02c6d2cc237b4ae8ab2aa04802ea76

$userInput = "Secret Password";
if(md5($userInput)=="df02c6d2cc237b4ae8ab2aa04802ea76"){
    echo "Password Correct";
}else{
    echo "Password Incorrect";
}