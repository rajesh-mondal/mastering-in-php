<?php
include_once "config.php";

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Cannot connect to database");
}else{
    echo "Connected<br/>";
    //Insert a record
    //INSERT INTO tasks (task, date) VALUES ('Do Something','2020-06-30');
    //mysqli_query($connection, "INSERT INTO tasks (task, date) VALUES ('Do Something More','2020-07-01')");
    //SELECT * FROM tasks;

    // $result = mysqli_query($connection,"SELECT * FROM tasks");
    // while($data = mysqli_fetch_assoc($result)){
    //     echo "<pre>";
    //     print_r($data);
    //     echo "<pre>";
    // }

    //mysqli_query($connection,"DELETE FROM tasks");
    mysqli_close($connection);
}