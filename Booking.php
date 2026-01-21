<?php
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']) && isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

    <div class="online">
        <h2>Online Courses 
            <button class="online-booking" role="button">Book</button>
        </h2>
        <div class="content">
            <p>Participate in our interactive online classes designed for all skill levels. You will get professional advice from our experienced chefs through live demos, engaging videos, and the chance to ask questions in real-time. Discover various Qatari dishes and cooking methods while interacting with fellow food enthusiasts. Unleash your culinary creativity and turn your kitchen into a lively school.
            </p>
            <img src="images/online-classes.png" alt="online classes" class="img1">
        </div>
    </div>

    <div class="personal">
        <h2>Personal Courses 
            <button class="personal-booking" role="button">Book</button>
        </h2>
        <div class="content">
            <p>Discover Culinary Expertise by cooking through personal courses available on our website. Benefit from one-to-one learning in an environment that is designed to fit your unique objectives and interests. Help is provided at every stage to pick up the fundamental strategies of cooking. Your family and friends will be impressed with the culinary wonders you make with practical experience and the insightful advice of our expert chefs
            </p>
            <img src="images/personal-classes.png" alt="personal classes" class="img2">
        </div>
    </div>

    
        <!-- Mitigation Strategy and Liability Disclaimer Section -->

<div id="terms-container">
    
<section id="disclaimer-section">
    <h2>Mitigation Strategies & Liability Disclaimer</h2>

    <p><strong>1. Liability Disclaimer:</strong></p>
    <p>
        By booking a cooking class with BZAR, you acknowledge and agree that BZAR is not responsible for any injuries or accidents that may occur during cooking or food preparation activities in your kitchen.
    </p>
    
    <p><strong>2. Acknowledgment of Potential Risks:</strong></p>
    <p>
        All personal class participants must sign a waiver acknowledging the potential risks associated with cooking, including but not limited to burns, cuts, and allergic reactions.
    </p>

    <p><strong>3. Food Safety and Hygiene:</strong></p>
    <p>
        BZAR ensures that all instructors hold valid food handling certifications and strictly follow hygiene protocols to ensure safety in all food preparation activities.
    </p>
</section>

<section id="terms-section">
    <label>
        <input type="checkbox" id="terms-checkbox" required>
        I acknowledge and agree to the <a href="terms.php">terms and conditions</a> of participating in the cooking class.
    </label>
        <button type="button" id="proceed-button" disabled>Proceed</button>
</section>

    </div>


    
 <!-- Footer Section -->
    
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

    <script src="js/Booking.js"></script>
</body>
</html>
