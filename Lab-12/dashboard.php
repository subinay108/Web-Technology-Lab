<?php
    include "authenticate.php";
    
    $cookie_name = "user";
    $cookie_value = $_SESSION['username'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    // File read
    $filename = "webtech.txt";
    $file = fopen($filename, 'r');
    $data = fread($file, 100);
    echo $data;
    fclose($file);

    // File write
    $file = fopen($filename, 'w');
    fwrite($file, "Latest Write: ".date("d-m-Y h:i:s a"));
    fclose($file);

    // File copy
    $sourcefilename = "webtech.txt";
    $targetfilename = "copyofwebtech.txt";
    if(!copy($sourcefilename, $targetfilename)){
        print("Failed to copy the content");
    }
    // Similarly rename(<targetfile name>, <newfile name>)

    // Find client IP
    $client_ip = $_SERVER['REMOTE_ADDR'];
    echo "Your IP: " . $client_ip;

?>

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
                <a href="logout.php" class="cta-btn login-btn">Logout</a>
            </nav>
    </header>

    <!-- Hero Section (Welcome Area) -->
    <section class="hero">
        <div class="hero-content">
            <h1>
                Hi👋, <?php
                    echo strtoupper($username);
                ?>
            </h1>
            <h2>Welcome to Subisphere!</h2>
            <p>Your Gateway to a New World</p>
            <form action="fileupload.php" method="POST" enctype="multipart/form-data">
                <label>Select file to upload: </label><br>
                <input type="file" name="myfile" required><br><br>
                <input type="submit" value="Upload file">
            </form>
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
        &copy; 2021 - <?php echo date('Y');?> Subisphere. All rights reserved.
    </footer>

</body>
</html>
