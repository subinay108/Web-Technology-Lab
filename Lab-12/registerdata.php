<?php
    include "dbconnection.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into credentials values('$username', '".md5($password)."')";

    if(mysqli_query($connection, $query)){
        echo '<script>';
        echo 'alert("Registration is successful");';
        echo 'window.location = ".";';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("Registration is unsuccessful");';
        echo 'window.location = "register.html";';
        echo '</script>';
    }
    
?>