<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <a href="form.php" class="addBtn" style="font-size: 1.2rem;">Add New Student</a>
    <table>
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Section</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>
        <?php
            include "dbconnection.php";
            $query = 'select * from btechds';
            $res = mysqli_query($connection, $query);
            if($res){
                $arr = mysqli_fetch_all($res);
            }
            foreach($arr as $rowno=>$row){
                echo '<tr>';
                foreach($row as $colname=>$value){
                    echo '<td>'.$value.'</td>';
                } 
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>