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
    <title>Fish Baryani</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Fish-Baryani.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        <h1>Fish Baryani Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/baryanifish.JPG" alt="Fish Baryani" />
        </div>
        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span class="recipe-title">Recipe</span>
                </span>
                <h2>Servings</h2>
                <div class="servings-control">
                    <button id="decrease-serving">-</button>
                    <span id="serving-count">4</span>
                    <button id="increase-serving">+</button>
                </div>

                <h2>Ingredients</h2>
                <ul class="ingredients-list">
                    <li>
                        <input type="checkbox" id="ingredient1">
                        <label for="ingredient1">
                            <span data-quantity="4">4</span> cups rice 🍚
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient2">
                        <label for="ingredient2">
                            <span data-quantity="2">2</span> big onions 🧅
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient3">
                        <label for="ingredient3">
                            <span data-quantity="4">4</span> fresh tomatoes 🍅
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient4">
                        <label for="ingredient4">
                            <span data-quantity="1">1</span> kg of fish 🐟
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient5">
                        <label for="ingredient5">
                            <span data-quantity="2">2</span> tomatoes 🍅
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient6">
                        <label for="ingredient6">
                            <span data-quantity="2">2</span> Green chili 🌶️
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient7">
                        <label for="ingredient7">
                            <span data-quantity="2">2</span> tablespoons Mix spices
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient8">
                        <label for="ingredient8">
                            <span data-quantity="3">3</span> tablespoons of tomato paste
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient9">
                        <label for="ingredient9">
                            <span data-quantity="2">2</span> Cinnamon sticks
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient10">
                        <label for="ingredient10">
                            <span data-quantity="1">1</span> Garlic 🧄
                        </label>
                    </li>
                </ul>

                <h2>Instructions</h2>
                <ol>
                    <li>
                        Wash the rice and leave it to soak for an hour. Wash the fish, season it, and let it soak in the spices.
                    </li>
                    <li>
                        Chop the onions, bell peppers, and garlic. Chop the tomatoes, then boil the rice until it’s half-cooked.
                    </li>
                    <li>
                        Fry the fish.
                    </li>
                    <li>
                        Sauté the onions and garlic with the hot pepper and cinnamon sticks. Add the bell peppers, tomatoes, and spices, then add the tomato paste. Put the fish in and add water. Let it boil for a little while.
                    </li>
                    <li>
                        Add the rice and leave it on low heat. Finally, your biryani is ready to eat!
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <!---------  Testimonials Section ------->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p class="quote">"I absolutely loved the recipes! Easy to follow and delicious every time!"</p>
                <p class="user">- Sarah K.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"A game-changer! The flavors are amazing, and the ingredients are so simple!"</p>
                <p class="user">- John D.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"I’ve tried several recipes, and every one has been a hit with my family!"</p>
                <p class="user">- Lisa T.</p>
            </div>
        </div>
    </section>

    <p class="total-users"><strong>Over 1,000 satisfied users have tried our recipes!</strong></p>

    <!---------- You might also like ... ----------->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

 <div class="container">
    <div class="card">
        <div class="imgBx">
            <img src="images/baryani.JPG" alt="">
        </div>
        <div class="content">
            <h2>Lamb Baryani </h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="Lamb-Baryani.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/Muhammar.JPG" alt="">
        </div>
        <div class="content">
            <h2>Muhammar </h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="Muhammar.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/baryanishrimp.JPG" alt="">
        </div>
        <div class="content">
            <h2>Shrimp Baryani</h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="ShrimpBaryani.php" class="cardbtn">View Recipe</a>
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

        <script src="js/Fish-Baryani.js"></script>
</body>
</html>
