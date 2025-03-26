<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Armstrong Number</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">
            Enter a number:
        <label>
        <input id="number" name="number" type="number">
        <input type="submit"/>
    </form>
    <br>
    <?php
        function isArmstrong($number){
            // calculate no. of digits of number
            $temp_number = $number;
            $n_digit = 0;
            while($temp_number > 0){
                $n_digit++;
                $temp_number = intdiv($temp_number, 10);
            }

            // calculate the sum of digits raised to no. of digits
            $s = 0;
            $temp_number = $number;
            while($temp_number > 0){
                $d = $temp_number % 10;
                $s = $s + $d ** $n_digit;
                $temp_number = intdiv($temp_number, 10);
            }

            // check the sum is equal to the number
            if($s == $number){
                return true;
            }

            return false;
        }

        if(isset($_POST['number'])){
            $number = $_POST['number'];
            if(isArmstrong($number)){
                echo $number." is an armstrong number";
            }else{
                echo $number." is not an armstrong number";
            }
        }

    ?>
</body>
</html>