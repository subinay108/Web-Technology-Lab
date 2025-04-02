<?php
    include "dbconnection.php";
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $section = $_POST['section'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $query = "insert into btechds values('$roll', '$name', '$section', '$contact', '$address')";

    if(mysqli_query($connection, $query)){
        echo '<script>';
        echo 'alert("Data insertion successful");';
        echo 'window.location = "form.php";';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("Data insertion failed");';
        echo 'window.location = "form.php";';
        echo '</script>';
    }
    
?>