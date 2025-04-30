<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Subisphere</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <a href=".">
            <div class="logo">
                <h1>Subisphere</h1>
            </div>
        </a>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#help">Help</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section (Welcome Area) -->
    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to Subisphere!</h2>
            <p>Your Gateway to a New World</p>
            <p>Join us today and explore the adventure!</p>
            <div class="cta-buttons">
                <a href="register.php" class="cta-btn register-btn">Register</a>
                <a href="login.php" class="cta-btn login-btn">Login</a>
            </div>
        </div>
    </section>

    <!-- Features Section (Optional) -->
    <section id="features" class="features">
        <h3>Why Join Subisphere?</h3>
        <div class="feature">
            <h4>Customizable Profiles</h4>
            <p>Personalize your experience to make it truly yours.</p>
        </div>
        <div class="feature">
            <h4>Real-Time Updates</h4>
            <p>Stay updated with live events and content.</p>
        </div>
        <div class="feature">
            <h4>Exclusive Content</h4>
            <p>Gain access to special features and content.</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#privacy">Privacy Policy</a></li>
            <li><a href="#terms">Terms of Service</a></li>
            <li><a href="#social">Follow Us</a></li>
        </ul>
        &copy; 2021 - <?php echo date('Y')?> Subisphere. All rights reserved.
    </footer>

</body>
</html>
