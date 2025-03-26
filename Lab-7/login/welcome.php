<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body{
            min-height: 500px;
            display: flex;
            font-size: 3rem;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        if(isset($name) && isset($email)){
            echo "Hi 👋,".$name."<br>";
            echo "Welcome to our world<br>";
            echo "Email: ".$email;
        }
    ?>
</body>
</html>