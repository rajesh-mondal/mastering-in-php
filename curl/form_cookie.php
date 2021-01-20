<?php 
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['loggedin']);
}
?>

<html>
<head>
    <title>Form Login</title>
</head>
<body>
<?php
if(!isset($_SESSION['loggedin'])){
    ?>
    <form action="form.php" method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit" name="submit">Submit</button>
    </form>
    <?php
}else{
    ?>
    Hello John, You're logged in<br/>
<?php
}
if(isset($_POST['submit'])){
    if('John' == $_POST['user'] && 'hello' == $_POST['password']){
        $_SESSION['loggedin'] = 1;
        echo "Successfull";
    }
}
?>
</body>
</html>