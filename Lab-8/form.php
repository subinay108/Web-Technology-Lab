<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<h1>Login Form</h1>
    <form id="myform" action="data.php" method="POST">
        <div>
            <label for="roll">Roll Number: </label>
            <input id="roll" name="roll" type="text"/>
        </div>
        <div>
            <label for="name">Full Name: </label>
            <input id="name" name="name" type="text"/>
        </div>
        <div>
            <label for="section">Section: </label>
            <input id="section" name="section" type="text"/>
        </div>
        <div>
            <label for="contact">Contact: </label>
            <input id="contact" name="contact" type="text"/>
        </div>
        <div>
            <label for="address">Address: </label>
            <input id="address" name="address" type="text"/>
        </div>

        <input type="submit">
    </form>
    <a href=".">go to home</a>
</body>
</html>