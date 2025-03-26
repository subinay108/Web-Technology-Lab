<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login Form</h1>
    <form id="myform" action="welcome.php" method="POST">
        <div>
            <label for="name">Name: </label>
            <input id="name" name="name" type="text"/>
        </div>
        <div>
            <label for="email">Email: </label>
            <input id="email" name="email" type="email"/>
        </div>
        <div>
            <label for="password">Password: </label>
            <div>
                <input id="password" name="password" type="password"/><button type="button" onclick="togglePassword()">Toggle</button>
            </div>
        </div>

        <input type="submit">
    </form>
    <script src="script.js"></script>
</body>
</html>