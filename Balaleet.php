<?php
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']) && isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the HTML document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design for various screen sizes -->
    <title>Balaleet</title> <!-- Title of the web page displayed in the browser tab -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/Balaleet.css"> <!-- Link to the external CSS file -->
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
          

    <header class="header"> <!-- Main header for the recipe -->
        <h1>Balaleet Recipe</h1>
    </header>

    <div class="row"> <!-- Row container for image and content -->
        <div class="imgWrapper"> 
            <img src="images/Blaleet.JPG" alt="Balaleet" /> <!-- Main image of the Balaleet dish -->
        </div>
        <div class="contentWrapper"> <!-- Wrapper for the recipe content -->
            <div class="content">
                <span class="textWrapper"> 
                    <span class="recipe-title">Recipe</span> <!-- Title for the recipe -->
                </span>
                <h2>Servings</h2> <!-- Heading for servings section -->
                <div class="servings-control"> <!-- Control buttons for serving size -->
                    <button id="decrease-serving">-</button> <!-- Button to decrease serving size -->
                    <span id="serving-count">4</span> <!-- Current serving count -->
                    <button id="increase-serving">+</button> <!-- Button to increase serving size -->
                </div>

                <h2>Ingredients</h2> <!-- Heading for ingredients section -->
                <ul class="ingredients-list"> <!-- Unordered list of ingredients -->
                    <li>
                        <input type="checkbox" id="ingredient1"> <!-- Checkbox for the ingredient -->
                        <label for="ingredient1"><span data-quantity="100">100</span> grams of vermicelli noodles 🍜 </label> <!-- Ingredient label -->
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient2">
                        <label for="ingredient2"><span data-quantity="0.25">1/4</span> tablespoons cardamom</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient3">
                        <label for="ingredient3"><span data-quantity="1">1</span> tablespoon of saffron </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient4">
                        <label for="ingredient4"><span data-quantity="3">3</span> tablespoons of rose water </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient5">
                        <label for="ingredient5"><span data-quantity="3">3</span> tablespoons of gee</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient6">
                        <label for="ingredient6"><span data-quantity="4">4</span> eggs🥚 </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient7">
                        <label for="ingredient7"><span data-quantity="1.5">1/2</span> teaspoon of salt 🧂 </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient8">
                        <label for="ingredient8"><span data-quantity="2">2</span> tablespoons of sugar</label>
                    </li>
                </ul>

                <h2>Instructions</h2> <!-- Heading for instructions section -->
                <ol> <!-- Ordered list of instructions -->
                    <li>Firstly, break your vermicelli noodles into pieces and boil until ready.</li>
                    <li>Secondly, remove the water from the noodles and add the ingredients, then mix them together.</li>
                    <li>Third, take a separate pan and make the eggs as you like: scrambled eggs or omelette eggs.</li>
                    <li>Fourth, once your eggs are ready, put them on top of your noodles.</li>
                    <li>Finally, your balaleet is ready to eat!!</li>
                </ol>
            </div>
        </div>
    </div>

    <!---------  Testimonials Section ------->

    <section class="testimonials"> <!-- Testimonials section to display user feedback -->
        <h2>What People Are Saying</h2> <!-- Heading for testimonials -->
        <div class="testimonial-container"> <!-- Container for individual testimonials -->
            <div class="testimonial"> <!-- Individual testimonial -->
                <p class="quote">"I absolutely loved the recipes! Easy to follow and delicious every time!"</p>
                <p class="user">- Sarah K.</p> <!-- User attribution for the testimonial -->
            </div>
            <div class="testimonial"> <!-- Another individual testimonial -->
                <p class="quote">"A game-changer! The flavors are amazing, and the ingredients are so simple!"</p>
                <p class="user">- John D.</p> <!-- User attribution -->
            </div>
            <div class="testimonial"> <!-- Another individual testimonial -->
                <p class="quote">"I’ve tried several recipes, and every one has been a hit with my family!"</p>
                <p class="user">- Lisa T.</p> <!-- User attribution -->
            </div>
        </div>
    </section>

    <p class="total-users"><strong>Over 1,000 satisfied users have tried our recipes!</strong></p> <!-- Statistics highlight -->

    <!---------- You might also like ... ------------>
    <div class="headingmostviewedrecipes"> 
        <h2>You might also like...</h2> <!-- Heading for suggested recipes -->
    </div>

    <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/Nakhi.png" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Nakhi</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Nakhi.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/sambosa.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Sambosa</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Sambosa.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/Shakshouka.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Shakshuka</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Shakshuka.php" class="cardbtn">View Recipe</a>
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

    
    <script src="js/Balaleet.js"></script> 
</body>
</html>