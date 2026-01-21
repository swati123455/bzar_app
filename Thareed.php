<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thareed Recipe</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Thareed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <!-- Logo Section -->
            <div class="logo">
                <a href="Homepage.html"><img src="logo.png" alt="Bzar Logo"> Bzar </a>
            </div>

            <!-- Navigation Links Section -->
            <div class="nav-links">
                <a href="Homepage.html">Homepage</a>
                <a href="Recipes.html">Recipes</a>
                <a href="About-Us.html">About Us</a>
                <a href="Plus.html">Plus</a>
                <a href="Courses.html">Courses</a>
                <a href="Booking.html">Bookings</a>
                <form id="searchForm" onsubmit="redirectToRecipe(event)">
                    <input type="text" id="searchBar" placeholder="Search recipes..." required>
                    <button type="submit">Search</button>
                </form>
            </div>

            <!-- Authentication Buttons -->
            <div id="login">
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Sign Up</button>
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Login</button>
            </div>
        </div>
    </nav>

    <header class="header">
        <h1>Thareed Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/Thareed.jpg" alt="Thareed" />
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
                    <li><input type="checkbox" id="ingredient1"> <label for="ingredient1"><span data-quantity="2">2</span> full onions, sliced</label></li>
                    <li><input type="checkbox" id="ingredient2"> <label for="ingredient2"><span data-quantity="4">4</span> tablespoons of sunflower oil</label></li>
                    <li><input type="checkbox" id="ingredient3"> <label for="ingredient3"><span data-quantity="4">4</span> fresh tomatoes 🍅</label></li>
                    <li><input type="checkbox" id="ingredient4"> <label for="ingredient4"><span data-quantity="1">1</span> kg lamb</label></li>
                    <li><input type="checkbox" id="ingredient5"> <label for="ingredient5"><span data-quantity="3">3</span> tablespoons of mixed spices</label></li>
                    <li><input type="checkbox" id="ingredient6"> <label for="ingredient6"><span data-quantity="1">1</span> tablespoon cumin (optional)</label></li>
                    <li><input type="checkbox" id="ingredient7"> <label for="ingredient7"><span data-quantity="1">1</span> small spoon of turmeric</label></li>
                    <li><input type="checkbox" id="ingredient8"> <label for="ingredient8"><span data-quantity="1">1</span> parsley 🌿 bundle</label></li>
                    <li><input type="checkbox" id="ingredient9"> <label for="ingredient9"><span data-quantity="1">1</span> tablespoon dry coriander</label></li>
                    <li><input type="checkbox" id="ingredient10"> <label for="ingredient10"><span data-quantity="0.5">0.5</span> tablespoon chili flakes</label></li>
                    <li><input type="checkbox" id="ingredient11"> <label for="ingredient11"><span data-quantity="3">3</span> tablespoons salt 🧂</label></li>
                    <li><input type="checkbox" id="ingredient12"> <label for="ingredient12"><span data-quantity="4">4</span> cloves of garlic</label></li>
                    <li><input type="checkbox" id="ingredient13"> <label for="ingredient13"><span data-quantity="10">10</span> cups of water</label></li>
                    <li><input type="checkbox" id="ingredient14"> <label for="ingredient14"><span data-quantity="2">2</span> potatoes 🥔, sliced</label></li>
                    <li><input type="checkbox" id="ingredient15"> <label for="ingredient15"><span data-quantity="1">1</span> Iranian bread</label></li>
                </ul>

                <h2>Instructions</h2>
                <ol>
                    <li>Heat oil in a large pot, add onions and garlic, and sauté until golden.</li>
                    <li>Add tomatoes and cook until they soften.</li>
                    <li>Add lamb, spices, and mix thoroughly. Cook until lamb is tender.</li>
                    <li>Add potatoes and 10 cups of water, cover, and simmer for 20 minutes.</li>
                    <li>Place pieces of bread in a bowl and pour the mixture over it. Serve and enjoy!</li>
                </ol>
            </div>
        </div>
    </div>

    <!--------- Testimonials Section --------->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p class="quote">"Thareed is now my favorite dish! Easy and flavorful!"</p>
                <p class="user">- Sarah K.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"A heartwarming recipe perfect for family gatherings!"</p>
                <p class="user">- John D.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"A traditional dish made easy. I love it!"</p>
                <p class="user">- Lisa T.</p>
            </div>
        </div>
    </section>

    <p class="total-users"><strong>Over 1,000 satisfied users have tried our recipes!</strong></p>

    <!---------- You Might Also Like Section --------->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/madrooba.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Madrooba</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Madrooba.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/harees.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Harees</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Harees.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/Muhammar.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Muhammar</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Muhammar.html" class="cardbtn">View Recipe</a>
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

    <script src="js/Thareed.js"></script>
</body>
</html>
