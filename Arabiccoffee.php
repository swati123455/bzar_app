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
    <title>Arabic Coffee</title> <!-- Page title -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/Arabiccoffee.css"> <!-- Link to the CSS file for styling -->
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

    <!-- Header Section -->
    <header class="header">
        <h1>Arabic Coffee Recipe</h1> <!-- Title of the recipe -->
    </header>

    <!-- Recipe Display Section -->
    <div class="row">
        <div class="imgWrapper">
            <img src="images/arabicCoffee.png" alt="Arabic Coffee" /> <!-- Image of Arabic Coffee -->
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
                            <span data-quantity="4">4</span> cups of water 💧
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient2">
                        <label for="ingredient2">
                            <span data-quantity="4">4</span> tablespoons of Arabic coffee powder
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient3">
                        <label for="ingredient3">
                            <span data-quantity="1">1</span> tablespoon of cardamom
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient4">
                        <label for="ingredient4">
                            <span data-quantity="1">1</span> teaspoon of powdered ginger 🫚
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient5">
                        <label for="ingredient5">
                            <span data-quantity="1">1</span> teaspoon of saffron
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient6">
                        <label for="ingredient6">
                            <span data-quantity="1">1</span> tablespoon of rose water
                        </label>
                    </li>
                </ul>

                <h2>Instructions</h2>
                <ol> <!-- Ordered list of instructions -->
                    <li>Put a pot of water on medium heat until it boils.</li>
                    <li>Add the coffee and leave the mixture to boil for 12 minutes.</li>
                    <li>Add the cardamom seeds and leave the mixture for 5 minutes.</li>
                    <li>Put the coffee in a flask after filtering it, then add the rose water.</li>
                    <li>Cover the flask immediately and leave it for 10 minutes before serving.</li>
                    <li>Your coffee is ready to be served. Enjoy!</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container"> <!-- Container for testimonials -->
            <div class="testimonial">
                <p class="quote">""Absolutely delicious! This arabic coffee recipe is just like the one I had in Qatar. The perfect balance of spices definitely making it again!" </p>
                <p class="user">– Aisha M.</p> <!-- User who provided the testimonial -->
            </div>
            <div class="testimonial">
                <p class="quote">"Authentic and full of flavour! I love how this recipe brings out the true essence of Arabic coffee. It pairs beautifully with dates!" </p>
                <p class="user"> – Khalid H.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"This Arabic coffee recipe is simply perfect! The balance of cardamom and saffron is just right, and it takes me back to family gatherings in the Gulf." </p>
                <p class="user">– Fatima A.</p>
            </div>
        </div>
    </section>

    <p class="total-users"><strong>Over 8,000 satisfied users have tried our Arabic Coffee recipe!</strong></p> <!-- User satisfaction highlight -->

    <!-- You Might Also Like Section -->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

    <div class="container">
        <div class="card"> 
            <div class="imgBx">
                <img src="images/karak.JPG" alt="Karak"> 
            </div>
            <div class="content">
                <h2>Karak</h2>
                <p>Here we will mention the ingredients and recipes.</p>
                <a href="Karak.phps" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> 
            <div class="imgBx">
                <img src="images/rosemilk.JPG" alt="RoseMilk"> 
            </div>
            <div class="content">
                <h2>Rose Milk</h2>
                <p>Here we will mention the ingredients and recipes.</p>
                <a href="RoseMilk.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="images/SaffronMilk.png" alt="SaffronMilk"> 
            </div>
            <div class="content">
                <h2>Saffron Milk</h2>
                <p>Here we will mention the ingredients and recipes.</p>
                <a href="SaffronMilk.php" class="cardbtn">View Recipe</a>
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
    
    <script src="js/Arabiccoffee.js"></script> 
</body>
</html>