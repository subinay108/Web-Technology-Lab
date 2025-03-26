<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Among 3 Numbers</title>
</head>
<body>
    <h1>Largest Among 3 Numbers</h1>
    <form action="" method="post">
        <label for="number1">Enter first number:</label>
        <input id="number1" name="number1" type="number"/><br>
        
        <label for="number2">Enter second number:</label>
        <input id="number2" name="number2" type="number"/><br>
        
        <label for="number3">Enter third number:</label>
        <input id="number3" name="number3" type="number"/><br>
        
        <input type="submit"/>
    </form>

    <?php
        if(isset($_POST['number1']) &&
            isset($_POST['number2']) &&
            isset($_POST['number3'])
        ){
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $num3 = $_POST['number3'];
            
            if($num1 >= $num2){
                if($num1 >= $num3){
                    echo $num1." is the largest";
                }else{
                    echo $num3." is the largest";
                }
            }else{
                if($num2 >= $num3){
                    echo $num2." is the largest";
                }else{
                    echo $num3." is the largest";
                }
            }
        }
    ?>
</body>
</html>