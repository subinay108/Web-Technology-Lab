<?php
    include "dbconnection.php";
    $query = "select * from btechds;";
    $result = mysqli_query($connection, $query);

    if(isset($_POST['update'])){
        $roll = $_POST['roll'];
        $name = $_POST['name'];
        $section = $_POST['section'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
            
        $update_query = "update btechds set std_name='$name', std_sec='$section', std_phone='$phone', std_address='$address' where std_roll='$roll'";

        if(mysqli_query($connection, $update_query)){
            echo '<script>';
            echo 'alert("Updation is successful");';
            echo 'window.location="."';
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert("Updation failed");';
            echo '</script>';

        }

    }

    if(isset($_POST['delete'])){
        $roll = $_POST['roll'];
        $delete_query = "delete from btechds where std_roll='$roll'";

        if(mysqli_query($connection, $delete_query)){
            echo '<script>';
            echo 'alert("Deletion is successful");';
            echo 'window.location="."';
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert("Deletion failed");';
            echo '</script>';

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD in a Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="title">Student Details</h1>
    <table>
        <tr>
            <th>SL No.</th>
            <th>Roll No</th>
            <th>Name</th>
            <th>Section</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
            $serial = 0;
            while($record = mysqli_fetch_assoc($result)){
                $serial++;
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td>$serial</td>";
                echo "
                <td>
                    <input class='roll-input' name='roll' type='text' value='".$record['std_roll']."' readonly>
                </td>
                ";
                echo "
                <td>
                    <input name='name' type='text' value='".$record['std_name']."'>
                </td>
                ";
                echo "
                <td>
                    <input class='sec-input' name='section' type='text' value='".$record['std_sec']."'>
                </td>
                ";
                echo "
                <td>
                    <input class='phone-input' name='phone' type='text' value='".$record['std_phone']."'>
                </td>
                ";
                echo "
                <td>
                    <input name='address' type='text' value='".$record['std_address']."'>
                </td>
                ";

                echo "<td>
                <input type='submit' name='update' value='Update'>
                <input type='submit' name='delete' value='Delete'>
                </td>";
                echo "</tr>";
                echo "</form>";
            }
        ?>
    </table>
    <form>
</body>
</html>