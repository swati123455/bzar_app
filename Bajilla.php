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
    <title>Bajilla</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="css/Bajilla.css">
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
        <h1>Bajilla Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/bajilla.png" alt="Bajilla">
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
                    <li><input type="checkbox" id="ingredient1"><label for="ingredient1"><span data-quantity="1">1</span> cup of dried fava beans (soaked overnight)</label></li>
                    <li><input type="checkbox" id="ingredient2"><label for="ingredient2"><span data-quantity="2">2</span> tablespoons olive oil</label></li>
                    <li><input type="checkbox" id="ingredient3"><label for="ingredient3"><span data-quantity="1">1</span> large onion 🧅, finely chopped</label></li>
                    <li><input type="checkbox" id="ingredient4"><label for="ingredient4"><span data-quantity="3">3</span> garlic cloves 🧄, minced</label></li>
                    <li><input type="checkbox" id="ingredient5"><label for="ingredient5"><span data-quantity="2">2</span> medium tomatoes 🍅, finely chopped</label></li>
                    <li><input type="checkbox" id="ingredient6"><label for="ingredient6"><span data-quantity="1">1</span> teaspoon ground cumin</label></li>
                    <li><input type="checkbox" id="ingredient7"><label for="ingredient7"><span data-quantity="1.5">1.5</span> teaspoon turmeric</label></li>
                    <li><input type="checkbox" id="ingredient8"><label for="ingredient8"><span data-quantity="1">1</span> teaspoon chili powder 🌶️ (optional, for heat)</label></li>
                    <li><input type="checkbox" id="ingredient9"><label for="ingredient9"><span data-quantity="1">1</span> teaspoon salt 🧂 (adjust to taste)</label></li>
                    <li><input type="checkbox" id="ingredient10"><label for="ingredient10"><span data-quantity="3">3</span> cups water or vegetable broth</label></li>
                    <li><input type="checkbox" id="ingredient11"><label for="ingredient11"><span data-quantity="1/4">1/4</span> cup chopped parsley 🌿, for garnish</label></li>
                </ul>

                <h2>Instructions</h2>
                <ol>
                    <li>Heat the olive oil in a large pot over medium heat. Add the chopped onion and sauté until golden brown.</li>
                    <li>Add the minced garlic and cook for another minute until fragrant.</li>
                    <li>Stir in the chopped tomatoes, cumin, turmeric, chili powder (if using), and salt. Cook until the tomatoes soften and the mixture thickens into a paste.</li>
                    <li>Add the soaked and drained fava beans to the pot, mixing well with the tomato and spice mixture.</li>
                    <li>Pour in the water or vegetable broth. Bring the mixture to a boil, then reduce the heat to low and cover. Simmer for about 45 minutes to 1 hour, or until the fava beans are tender.</li>
                    <li>Taste and adjust seasoning if needed. Garnish with chopped parsley before serving.</li>
                    <li>Enjoy your Bajilla as a breakfast or as a hearty standalone dish!</li>
                </ol>
            </div>
        </div>
    </div>

    <!---------  Testimonials Section ------->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p class="quote">"The Bajilla recipe is absolutely fantastic! Simple, healthy, and packed with flavor. My family couldn't get enough!"</p>
                <p class="user">- Aisha M.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"This dish brings back so many childhood memories. The taste is authentic and comforting."</p>
                <p class="user">- Khalid S.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"I love how easy this recipe is to prepare, yet it tastes like something straight out of a traditional Qatari kitchen!"</p>
                <p class="user">- Mariam A.</p>
            </div>
        </div>
    </section>

    <p class="total-users"><strong>Over 1,200 satisfied users have tried our recipes!</strong></p>

    <!---------- You might also like ... ----------->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="images/Nakhi.png" alt="">
            </div>
            <div class="content">
                <h2>Nakhi</h2>
                <p>Here we will mention the ingredients and recipes.</p>
                <a href="Nakhi.php" class="cardbtn">View Recipe</a>            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="images/Shakshouka.JPG" alt="">
            </div>
            <div class="content">
                <h2>Shakshuka</h2>
                <p>Here we will mention the ingredients and recipes.</p>
                <a href="Shakshuka.php" class="cardbtn">View Recipe</a>            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="images/Blaleet.JPG" alt="">
            </div>
            <div class="content">
                <h2>Balaleet</h2>
                <p>Here we will mention the ingredients and recipes.</p>
                <a href="Balaleet.php" class="cardbtn">View Recipe</a>            </div>
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

       <script src="js/Bajilla.js"></script>
</body>
</html>
