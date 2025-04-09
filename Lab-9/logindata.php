<?php
    include "dbconnection.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from credentials where username = '$username' and password ='".md5($password)."'";

    $result = mysqli_query($connection, $query);

    $rows = mysqli_num_rows($result);

    if($rows == 1){
        echo '<script>';
        echo 'alert("Login is successful");';
        echo 'window.location = "dashboard.php";';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("Login is unsuccessful");';
        echo 'window.location = "login.php";';
        echo '</script>';
    }
    
?>