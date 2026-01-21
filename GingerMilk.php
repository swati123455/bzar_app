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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design for mobile devices -->
    <title>Ginger Milk</title> <!-- Page title -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/GingerMilk.css"> <!-- Link to the CSS file for styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
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
    
    <header class="header">
        <h1>Ginger Milk Recipe</h1> <!-- Title of the recipe -->
    </header>

    <!-- Recipe Display Section -->
    <div class="row">
        <div class="imgWrapper">
            <img src="images/gingerMilk.png" alt="Ginger Milk" /> <!-- Image of Arabic Coffee -->
        </div>
        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span class="recipe-title">Recipe</span> <!-- Recipe title -->
                </span>
                <h2>Servings</h2>
                <div class="servings-control"> <!-- Control for adjusting servings -->
                    <button id="decrease-serving">-</button> <!-- Decrease serving button -->
                    <span id="serving-count">4</span> <!-- Current serving count -->
                    <button id="increase-serving">+</button> <!-- Increase serving button -->
                </div>

            <h2>Ingredients</h2>
            <ul class="ingredients-list"> <!-- List of ingredients -->
                <li>
                    <input type="checkbox" id="ingredient1"> <!-- Checkbox for ingredient -->
                    <label for="ingredient1">
                        <span data-quantity="2">2</span> cups of milk 🥛
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="ingredient2">
                    <label for="ingredient2">
                        <span data-quantity="1">1</span> tablespoon of freshly grated ginger 🫚
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="ingredient3">
                    <label for="ingredient3">
                        <span data-quantity="1">1</span> tablespoon of sugar (or adjust to taste) 
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="ingredient4">
                    <label for="ingredient4">
                        <span data-quantity="1.5">1.5</span> teaspoon of ground cardamom
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="ingredient5">
                    <label for="ingredient5">
                        <span data-quantity="1">1</span> cinnamon stick (optional) 🌿
                    </label>
                </li>
            </ul>

            <h2>Instructions</h2>
            <ol> <!-- Ordered list of instructions -->
                <li>In a saucepan, heat the milk over medium heat until it begins to simmer.</li>
                <li>Add the grated ginger, sugar, and ground cardamom to the milk.</li>
                <li>If desired, add a cinnamon stick for an extra layer of flavor.</li>
                <li>Let the mixture simmer gently for 5-7 minutes, stirring occasionally.</li>
                <li>Strain the mixture into cups to remove the ginger and cinnamon stick.</li>
                <li>Serve warm and enjoy the soothing flavors of traditional Qatari Ginger Milk!</li>
            </ol>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container"> <!-- Container for testimonials -->
        <div class="testimonial">
            <p class="quote">"The Traditional Qatari Ginger Milk has become my go-to comfort drink. It's soothing and so easy to make!"</p>
            <p class="user">- Amal R.</p> <!-- User who provided the testimonial -->
        </div>
        <div class="testimonial">
            <p class="quote">"I never thought something so simple could taste so amazing. A perfect balance of warmth and flavor!"</p>
            <p class="user">- Omar H.</p>
        </div>
        <div class="testimonial">
            <p class="quote">"This recipe reminds me of home! The ginger and cardamom make it so special. A must-try for everyone."</p>
            <p class="user">- Fatima A.</p>
        </div>
        </div>

    </section>

    <p class="total-users"><strong>Over 1,200 satisfied users have tried our recipes!</strong></p>

    <!-- You Might Also Like Section -->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

<div class="container">
    <div class="card">
        <div class="imgBx">
            <img src="images/karak.JPG" alt="">
        </div>
        <div class="content">
            <h2>Karak </h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="Karak.html" class="cardbtn">View Recipe</a>
        </div>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/SaffronMilk.png" alt="">
        </div>
        <div class="content">
            <h2>Saffron Milk </h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="SaffronMilk.html" class="cardbtn">View Recipe</a>
        </div>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/arabicCoffee.png" alt="">
        </div>
        <div class="content">
            <h2>Arabic Coffee</h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="Arabiccoffee.html" class="cardbtn">View Recipe</a>
        </div>
    </div>
</div>
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


    <script src="js/GingerMilk.js"></script> <!-- Link to external JavaScript file -->
</body>
</html>