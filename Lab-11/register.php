<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Subisphere</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a href=".">
            <div class="logo">
                <h1>Subisphere</h1>
            </div>
        </a>
    </header>

    <main>
        <section class="form-section">
            <h2>Create Your Account</h2>
            <form action="registerdata.php" method="POST">
                <input type="text" placeholder="Username" name="username" required><br><br>
                <!-- <input type="email" placeholder="Email" required><br> -->
                <input type="password" placeholder="Password" name="password" required><br><br>
                <!-- <input type="password" placeholder="Confirm Password" required> -->
                <button type="submit">Register</button>
            </form>
        </section>
    </main>


    <footer>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#privacy">Privacy Policy</a></li>
            <li><a href="#terms">Terms of Service</a></li>
        </ul>
        &copy; 2021 - <?php echo date('Y')?> Subisphere. All rights reserved.
    </footer>
</body>
</html>
