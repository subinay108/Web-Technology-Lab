<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="dob">
            Enter your date of birth:
        </label>
        <input id="dob" name="dob" type="date"/>
        <input type="submit"/>
    </form>
    <?php
        if(isset($_POST['dob'])){
            $dob = date_create($_POST['dob']);
            $today = date_create(date('d-m-Y'));
            $age = date_diff($dob, $today);
            echo "Age: ".$age->format("%Y years %m months %d days");
        }
    ?>
</body>
</html>