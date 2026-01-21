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
    <title>Maamoul</title> <!-- Page title -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/Maamoul.css"> <!-- Link to the CSS file for styling -->
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
        <h1>Maamoul Recipe</h1> <!-- Title of the recipe -->
    </header>

    <!-- Recipe Display Section -->
    <div class="row">
        <div class="imgWrapper">
            <img src="images/maamoul.png" alt="Maamoul" /> <!-- Image of Arabic Coffee -->
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
                            <span data-quantity="3">3</span> cups of fine semolina
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient2">
                        <label for="ingredient2">
                            <span data-quantity="1">1</span> cup of all-purpose flour
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient3">
                        <label for="ingredient3">
                            <span data-quantity="1">1</span> cup of melted ghee (clarified butter)
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient4">
                        <label for="ingredient4">
                            <span data-quantity="0.75">0.75</span> cup of sugar
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient5">
                        <label for="ingredient5">
                            <span data-quantity="1.5">1.5</span> cup of warm milk
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient6">
                        <label for="ingredient6">
                            <span data-quantity="1">1</span> teaspoon of mahlab (optional, for flavor)
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient7">
                        <label for="ingredient7">
                            <span data-quantity="1">1</span> cup of date paste (for filling)
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient8">
                        <label for="ingredient8">
                            <span data-quantity="1.5">1.5</span> cup of finely chopped pistachios (optional filling)
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient9">
                        <label for="ingredient9">
                            <span data-quantity="0.75">0.75</span> cup of sugar for dusting (optional)
                        </label>
                    </li>
                </ul>

                <h2>Instructions</h2>
                <ol> <!-- Ordered list of instructions -->
                    <li>In a large mixing bowl, combine the semolina, flour, sugar, and mahlab (if using).</li>
                    <li>Pour the melted ghee into the dry ingredients and mix until the texture resembles coarse sand.</li>
                    <li>Gradually add the warm milk while kneading the dough until it comes together into a soft, pliable consistency. Cover and let it rest for 1 hour.</li>
                    <li>Divide the dough into small balls, roughly the size of a walnut.</li>
                    <li>Prepare your filling: Roll the date paste into small balls or mix chopped pistachios with a teaspoon of sugar for a nutty filling.</li>
                    <li>Flatten each dough ball into a disc, place a filling ball in the center, and fold the dough around it, sealing tightly.</li>
                    <li>Press the filled dough into a ma'amoul mold to create patterns, then gently tap the mold to release the cookie.</li>
                    <li>Place the cookies on a baking tray lined with parchment paper.</li>
                    <li>Bake in a preheated oven at 180°C (350°F) for 15-20 minutes or until the bottoms are lightly golden.</li>
                    <li>Let the ma'amoul cool completely, then dust with powdered sugar if desired.</li>
                    <li>Serve and enjoy this festive treat with a cup of tea or coffee!</li>
                </ol>

        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container"> <!-- Container for testimonials -->
            <div class="testimonial">
                <p class="quote">"These Ma'amoul cookies are the best I've ever had! The date filling is perfectly sweet, and the shortbread texture is just right."</p>
                <p class="user">- Ahmed R.</p> <!-- User who provided the testimonial -->
            </div>
            <div class="testimonial">
                <p class="quote">"A true taste of tradition! These cookies are a family favorite, and they remind me of the ones we used to make during the holidays."</p>
                <p class="user">- Samira A.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"Delicious! The pistachio filling gives them a wonderful crunch, and they melt in your mouth. Perfect for any occasion!"</p>
                <p class="user">- Khaled M.</p>
            </div>
        </div>


    </section>

    <p class="total-users"><strong>Over 1,400 satisfied users have tried our recipes!</strong></p>

    <!-- You Might Also Like Section -->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/mahlbiyataish.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Mahalabiat Aish</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="MahalabiaAish.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/Khanfaroosh.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Khanfaroosh</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Khanfaroosh.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/lugaimathoney.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Honey Lugaimat</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="HoneyLugaimat.php" class="cardbtn">View Recipe</a>
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
  <script src="js/Maamoul.js"></script> <!-- Link to external JavaScript file -->
</body>
</html>