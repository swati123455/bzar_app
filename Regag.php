<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design for mobile devices -->
    <title>Regag</title> <!-- Page title -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/Regag.css"> <!-- Link to the CSS file for styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
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
        <h1>Regag Recipe</h1> <!-- Title of the recipe -->
    </header>

    <!-- Recipe Display Section -->
    <div class="row">
        <div class="imgWrapper">
            <img src="images/Regag.png" alt="Regag" /> <!-- Image of Regag -->
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
                <ul class="ingredients-list">
                    <li><input type="checkbox" id="ingredient1">
                        <label for="ingredient1"><span data-quantity="1">1</span> cup of all-purpose flour</label></li>
                    <li><input type="checkbox" id="ingredient2">
                        <label for="ingredient2"><span data-quantity="1">1</span> cup of water</label></li>
                    <li><input type="checkbox" id="ingredient3">
                        <label for="ingredient3"><span data-quantity="0.75">0.75</span> teaspoon of salt</label></li>
                    <li><input type="checkbox" id="ingredient4">
                        <label for="ingredient4"><span data-quantity="0.5">0.5</span> teaspoon of oil or ghee (for greasing)</label></li>
                    <li><input type="checkbox" id="ingredient5">
                        <label for="ingredient5"><span data-quantity="2">2</span> large eggs</label></li>
                    <li><input type="checkbox" id="ingredient6">
                        <label for="ingredient6"><span data-quantity="2">2</span> tablespoons of milk (optional)</label></li>
                    <li><input type="checkbox" id="ingredient7">
                        <label for="ingredient7"><span data-quantity="1">1</span> teaspoon of butter or oil (for scrambled eggs)</label></li>
                    <li><input type="checkbox" id="ingredient8"><label for="ingredient8">Salt and pepper, to taste</label></li>
                </ul>

                <h2>Instructions</h2>
                <ol>
                    <li>Mix the flour, water, and salt in a bowl until smooth and lump-free. Rest the batter for 10-15 minutes.</li>
                    <li>Heat a flat griddle or non-stick pan over medium heat, and grease lightly with oil or ghee.</li>
                    <li>Pour a ladleful of batter onto the pan and spread it thin to form a large circle. Cook for 1-2 minutes until golden spots appear. Flip if needed. Set aside.</li>
                    <li>For scrambled eggs, whisk the eggs with milk (if using), salt, and pepper. Heat butter or oil in a pan and cook while stirring gently until done.</li>
                    <li>Spread the scrambled eggs on the Regag Bread, fold or roll as desired, and serve hot.</li>
                </ol>
            </div>
        </div>

                <section class="testimonials">
                    <h2>What People Are Saying</h2>
                    <div class="testimonial-container">
                        <div class="testimonial">
                            <p class="quote">"This is the best breakfast recipe I've ever tried!"</p>
                            <p class="user">- Aisha K.</p>
                        </div>
                        <div class="testimonial">
                            <p class="quote">"The Regag is so thin and crispy, and the scrambled eggs make it perfect!"</p>
                            <p class="user">- Omar R.</p>
                        </div>
                        <div class="testimonial">
                            <p class="quote">"Authentic Qatari Regag! My family loved it."</p>
                            <p class="user">- Maryam S.</p>
                        </div>
                    </div>
                </section>


    <p class="total-users"><strong>Over 1,700 satisfied users have tried our recipe!</strong></p>

    <!-- You Might Also Like Section -->
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
                <img src="images/Shakshouka.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Shakshuka</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Shakshuka.html" class="cardbtn">View Recipe</a>
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

    <script src="js/Regag.js"></script> 
        
</body>
</html>