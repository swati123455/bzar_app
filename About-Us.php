<?php
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']) && isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
    <title>About Us</title> <!-- Page title -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/About-Us.css"> <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Link to Font Awesome icons -->
</head> 

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="Homepage.php"><img src="images/logo.png" alt="Bzar Logo"> Bzar </a>
            </div>
            <div class="nav-links">
                <a href="Homepage.php">Homepage</a>
                <a href="Recipes.php">Recipes</a>
                <a href="About-Us.php">About Us</a>
                <a href="Plus.php">Plus</a>
                <a href="Courses.php">Courses</a>
                <a href="Booking.php">Bookings</a>
                <a href="OurChefs.php">Our Chefs</a>
                
                <form id="searchForm" onsubmit="redirectToRecipe(event)">
                    <input type="text" id="searchBar" placeholder="Search recipes..." required>
                    <button type="submit">Search</button>
                </form>
            </div>

            <?php if (!$isLoggedIn): ?>
            <div id="login">
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Sign Up</button>
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Login</button>
            </div>
            <?php else: ?>
            <div class="user-dropdown">
                <div class="user-toggle">
                    <img src="images/user-icon.png" alt="User Icon">
                    <span class="welcome-message">Welcome, <?= htmlspecialchars($username); ?>!</span>
                    <i class="fas fa-caret-down dropdown-icon"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a href="User-Profile.php">View Profile</a></li>
                    <li><a href="Settings.php">Settings</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>

            <?php endif; ?>
        </div>
    </nav>

    <!-- About Us Content -->
    <div class="about-us"> 
        <h1>About Us...</h1>

        <!-- Who We Are Section -->
        <div class="who-we-are">
            <h2>Who We Are</h2>
            <div class="content">
                <p class="fade-in">We are BZAR, a one-of-a-kind platform dedicated to preserving and sharing Qatar’s rich culinary heritage. Our goal is to celebrate the authentic cultural and traditional dishes of Qatar while educating the next generation about their favorite comfort foods. We offer a diverse collection of iconic and mouth-watering Qatari recipes, accompanied by tips and tricks passed down by Qatari ancestors and chefs, making these recipes easy to follow for cooks of all skill levels.</p>
                <img src="images/logo.png" alt="Who We Are" class="section-img"> <!-- Image related to "Who We Are" -->
            </div>
        </div>

        <!-- Our Mission Section -->
        <div class="our-mission">
            <h2>Our Mission</h2>
            <div class="content"> 
                <img src="images/mission.png" alt="Our Mission" class="section-img"> <!-- Image for "Our Mission" -->
                <p class="fade-in">Our mission is to create a space where anyone can learn how to cook authentic Qatari cuisine, whether through our wide range of recipes or personalized one-on-one cooking classes with expert chefs. We are committed to educating the next generation and food lovers from around the world on how to make their favorite Qatari dishes with ease, preserving traditional methods while embracing modern cooking techniques.</p>
            </div>
        </div>

        <!-- Our Beliefs Section -->
        <div class="our-beliefs">
            <h2>Our Beliefs and Promise</h2>
            <div class="content">
                <p class="fade-in">We believe in the importance of preserving Qatar’s culinary heritage. Our promise is to always provide authentic recipes, ensuring that each dish reflects the true taste of Qatari tradition. Alongside these recipes, we will offer guidance through our expert chefs who share age-old techniques, making the experience approachable yet genuine. We are committed to helping users learn and grow, whether they are new to cooking or seasoned chefs.</p>
                <img src="images/image1.jpg" alt="Our Beliefs and Promise" class="section-img"> <!-- Image for "Our Beliefs" -->
            </div>
        </div>

        <!-- Our Community Section -->
        <div class="our-community">
            <h2>Our Community</h2>
            <div class="content"> 
                <img src="images/community.png" alt="Our Community" class="section-img"> <!-- Image for "Our Community" -->
                <p class="fade-in">Our community is made up of food enthusiasts who share a passion for authentic Qatari cuisine. We foster an environment where people can not only explore traditional recipes but also actively engage with our chefs through one-on-one classes, direct messaging, and more. By creating a space where learning and sharing go hand in hand, we aim to build a supportive community that values both tradition and innovation in Qatari cooking.</p>            
            </div>
        </div>
    </div>
    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>BZAR</h3>
                <ul>
                    <li><a href="Homepage.php">Homepage</a></li>
                    <li><a href="Recipes.php">Recipes</a></li>
                    <li><a href="About-Us.php">About Us</a></li>
                    <li><a href="Plus.php">Plus</a></li>
                    <li><a href="Courses.php">Courses</a></li>
                    <li><a href="Booking.php">Booking</a></li>
                    <li><a href="OurChefs.php">Our Chefs</a></li>
                    <li><a href="LoginandSignup.php">Login</a></li>
                    <li><a href="LoginandSignup.php">Register</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>GET OUR NEWSLETTER</h3>
                <p>Join our community to get the latest recipes, news, updates, and special offers delivered directly to your inbox.</p>
                <form>
                    <input type="email" placeholder="Enter your email here..." />
                    <button type="submit">→</button>
                </form>
            </div>
            <div class="footer-column">
                <h3>Reach Out</h3>
                <div class="reach-out">
                    <a href="mailto:bzar.team.qa@gmail.com"><i class="fas fa-envelope"></i></a>
                    <a href="tel:+97412345678"><i class="fa fa-phone"></i></a>
                    <a href="https://wa.me/97412345678"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <p class="footer-message">Made with ♡ in Qatar</p>
        <p class="footer-copyright">© 2028 BZAR. All rights reserved.</p>
    </footer>
   <script src="js/About-Us.js"></script> <!-- Link to JavaScript file -->

</body>
</html>