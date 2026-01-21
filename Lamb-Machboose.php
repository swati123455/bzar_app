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
    <title>Lamb Machboose</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Lamb-Machboose.css">
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
    
    
    

    <header class="header">
        <h1>Lamb Machboose Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/majboose.JPG" alt="Lamb Machboose" />
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
                    <li><input type="checkbox" id="ingredient1"> <label for="ingredient1"><span data-quantity="2">2</span> kg lamb 🐑</label></li>
                    <li><input type="checkbox" id="ingredient2"> <label for="ingredient2"><span data-quantity="1">1</span> stick of cinnamon</label></li>
                    <li><input type="checkbox" id="ingredient3"> <label for="ingredient3"><span data-quantity="2">2</span> onions 🧅</label></li>
                    <li><input type="checkbox" id="ingredient4"> <label for="ingredient4"><span data-quantity="1">1</span> pinch 🤏 of sugar</label></li>
                    <li><input type="checkbox" id="ingredient5"> <label for="ingredient5"><span data-quantity="1">1</span> bell pepper 🫑</label></li>
                    <li><input type="checkbox" id="ingredient6"> <label for="ingredient6"><span data-quantity="1">1</span> hot chili 🌶️ (optional)</label></li>
                    <li><input type="checkbox" id="ingredient7"> <label for="ingredient7"><span data-quantity="1">1</span> tbsp garlic 🧄 paste</label></li>
                    <li><input type="checkbox" id="ingredient8"> <label for="ingredient8"><span data-quantity="1">1</span> tbsp ginger paste</label></li>
                    <li><input type="checkbox" id="ingredient9"> <label for="ingredient9"><span data-quantity="1">1</span> tbsp mix spices</label></li>
                    <li><input type="checkbox" id="ingredient10"> <label for="ingredient10"><span data-quantity="0.5">0.5</span> tsp cumin</label></li>
                    <li><input type="checkbox" id="ingredient11"> <label for="ingredient11"><span data-quantity="1">1</span> tsp saffron powder</label></li>
                    <li><input type="checkbox" id="ingredient12"> <label for="ingredient12"><span data-quantity="2">2</span> tbsp tomato paste</label></li>
                    <li><input type="checkbox" id="ingredient13"> <label for="ingredient13"><span data-quantity="2">2</span> magi cubes (meat stock)</label></li>
                    <li><input type="checkbox" id="ingredient14"> <label for="ingredient14"><span data-quantity="2">2</span> tsp salt 🧂</label></li>
                    <li><input type="checkbox" id="ingredient15"> <label for="ingredient15"><span data-quantity="2">2</span> cups jasmine rice 🍚</label></li>
                </ul>
                <h2>Instructions</h2>
                <ol>
                    <li>Slice the onions and sauté them in a pot with oil. Add all the spices and mix.</li>
                    <li>Add the rice and 4 cups of water to the pot.</li>
                    <li>Season the meat with mixed spices and bake in the oven for 20 minutes until partially cooked.</li>
                    <li>Transfer the meat into the pot with the rice, cover, and cook on low heat for 30 minutes.</li>
                    <li>Your Lamb Machboose is ready to serve! Enjoy!</li>
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


    <!---------- You might also like ... ------------>
<div class="headingmostviewedrecipes">
    <h2 >You might also like...</h2>
</div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/machboosechicken.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Chicken Machboose</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Chicken-Machboose.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/Muhammar.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Muhammar</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Muhammar.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/lambsaloona.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Lamb Saloona</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="LambSaloona.php" class="cardbtn">View Recipe</a>
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


    <script src="js/Lamb-Machboose.js"></script>
</body>
</html>