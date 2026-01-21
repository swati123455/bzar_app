<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakshouka</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Shakshouka.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Navbar Section -->
    
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="Homepage.html"><img src="images/logo.png" alt="Bzar Logo"> Bzar </a>
            </div>
            <div class="nav-links">
                <a href="Homepage.html">Homepage</a>
                <a href="Recipes.html">Recipes</a>
                <a href="About-Us.html">About Us</a>
                <a href="Plus.html">Plus</a>
                <a href="Courses.html">Courses</a>
                <a href="Booking.html">Bookings</a>
                <a href="OurChefs.html">Our Chefs</a>
                
                <form id="searchForm" onsubmit="redirectToRecipe(event)">
                    <input type="text" id="searchBar" placeholder="Search recipes..." required>
                    <button type="submit">Search</button>
                </form>
            </div>
            <div id="login">
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Sign Up</button>
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Login</button>
            </div>
        </div>
    </nav>
    

    <!-- Header Section -->
    <header class="header">
        <h1>Shakshouka Recipe</h1>
    </header>

    <!-- Recipe Content -->
    <div class="row">
        <div class="imgWrapper">
            <img src="images/Shakshouka.JPG" alt="Shakshouka">
        </div>
        <div class="contentWrapper">
            <div class="content">
                <h2>Recipe</h2>
                <h2>Servings</h2>
                <div class="servings-control">
                    <button id="decrease-serving">-</button>
                    <span id="serving-count">4</span>
                    <button id="increase-serving">+</button>
                </div>

                <h2>Ingredients</h2>
                <ul class="ingredients-list">
                    <li><input type="checkbox" id="ingredient1"> <label for="ingredient1"><span data-quantity="4">4</span> tomatoes 🍅</label></li>
                    <li><input type="checkbox" id="ingredient2"> <label for="ingredient2"><span data-quantity="5">5</span> eggs 🥚</label></li>
                    <li><input type="checkbox" id="ingredient3"> <label for="ingredient3"><span data-quantity="1">1</span> small spoon of salt 🧂</label></li>
                    <li><input type="checkbox" id="ingredient4"> <label for="ingredient4"><span data-quantity="1">1</span> small spoon of black pepper powder</label></li>
                    <li><input type="checkbox" id="ingredient5"> <label for="ingredient5"><span data-quantity="4">4</span> tablespoons of sunflower oil</label></li>
                    <li><input type="checkbox" id="ingredient6"> <label for="ingredient6"><span data-quantity="1">1</span> small spoon of turmeric</label></li>
                </ul>

                <h2>Instructions</h2>
                <ol>
                    <li>Cut the tomatoes into slices and add them to a pan with oil. Cover and cook until the tomatoes melt.</li>
                    <li>Add the eggs to the pan and mix well with the tomatoes.</li>
                    <li>Add all the spices to the pan and mix thoroughly.</li>
                    <li>Cook for 4 minutes, then remove from heat.</li>
                    <li>Your Shakshouka is ready to be served. Enjoy!</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
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

    <!-- Recommendations Section -->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/Nakhi.png" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Nakhi</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Nakhi.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/sambosa.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Sambosa</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Sambosa.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/Blaleet.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Balaleet</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Balaleet.html" class="cardbtn">View Recipe</a>
            </div>
        </div>
    </div>


<!-- Footer Section -->
    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>BZAR</h3>
                <ul>
                    <li><a href="Homepage.html">Homepage</a></li>
                    <li><a href="Recipes.html">Recipes</a></li>
                    <li><a href="About-Us.html">About Us</a></li>
                    <li><a href="Plus.html">Plus</a></li>
                    <li><a href="Courses.html">Courses</a></li>
                    <li><a href="Booking.html">Booking</a></li>
                    <li><a href="OurChefs.html">Our Chefs</a></li>
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
                    <a href="mailto:BZAR@gmail.com"><i class="fas fa-envelope"></i></a>
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

    <script src="js/Shakshouka.js"></script>
</body>
</html>
