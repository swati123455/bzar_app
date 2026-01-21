<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrimp Baryani</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/ShrimpBaryani.css">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    

    <header class="header">
        <h1>Shrimp Baryani Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/baryanishrimp.JPG" alt="Shrimp Baryani" />
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
                    <li><input type="checkbox" id="ingredient1">
<label for="ingredient1"><span data-quantity="2">400</span> grams of shrimps 🦐 </label></li>
                    <li><input type="checkbox" id="ingredient2">
<label for="ingredient2"><span data-quantity="1">1/2</span> cup of yogurt </label></li>
                    <li><input type="checkbox" id="ingredient3">
<label for="ingredient3"><span data-quantity="2">1/4</span> cup of fried onions 🧅 </label></li>
                    <li><input type="checkbox" id="ingredient4">
<label for="ingredient4"><span data-quantity="1">3</span> pieces of green chili 🌶️</label></li>
                    <li><input type="checkbox" id="ingredient5">
<label for="ingredient5"><span data-quantity="1">2</span> tablespoons of lemon 🍋 juice </label></li>
                    <li><input type="checkbox" id="ingredient6">
<label for="ingredient6"><span data-quantity="1">1</span> tablespoon of garlic 🧄 paste</label></li>
                    <li><input type="checkbox" id="ingredient7">
<label for="ingredient7"><span data-quantity="1">1</span> tablespoon of organic oil </label></li>
                    <li><input type="checkbox" id="ingredient8">
<label for="ingredient8"><span data-quantity="1">3/4</span> cup of ginger 🫚 paste</label></li>
                    <li><input type="checkbox" id="ingredient9">
<label for="ingredient9"><span data-quantity="1">1</span> teaspoon of salt 🧂</label></li>
                    <li><input type="checkbox" id="ingredient10">
<label for="ingredient10"><span data-quantity="0.5">0.5</span> 1/2 teaspoons of cumin </label></li>
                    <li><input type="checkbox" id="ingredient11">
<label for="ingredient11"><span data-quantity="1">6</span> pieces of black lemon (loomi) 🍋</label></li>
                    <li><input type="checkbox" id="ingredient12">
<label for="ingredient12"><span data-quantity="2">1</span> cinnamon stick</label></li>

                </ul>
                <h2>Instructions</h2>
                <ol>
                    <li>First, rinse and claen out your shrimp with water and some lemon to get rid of the fishy smell.</li>
                    <li>Afterwards, place your shrimp in a bowl and add the folowing ingredtients, mix and marinate( onions, yogurt, black pepper, salt and lemon)</li>
                    <li>Bring your rice to a boil until its half way done.</li>
                    <li>Cook your marinated shrim, once the shrimps are ready, add them to the rice and cover for 20 minutes with low heat.</li>
                    <li>While its cooking, add the fried onions as a garnish on top of the baryani.</li>
                    <li>You may add some rasines, cashew nuts and parsley for extra garnish if you like.</li>
                    <li>Bon Appétit !</li>
                </ol>
            </div>
        </div>
    </div>

    <!---------  Testimonials Section ------->

<section class="testimonials">
    <h2>What People Are Saying</h2>
    <div class="testimonial-container">
        <div class="testimonial">
            <p class="quote">"I absolutely loved the recipes! Easy to
follow and delicious every time!"</p>
            <p class="user">- Sarah K.</p>
        </div>
        <div class="testimonial">
            <p class="quote">"A game-changer! The flavors are amazing,
and the ingredients are so simple!"</p>
            <p class="user">- John D.</p>
        </div>
        <div class="testimonial">
            <p class="quote">"I’ve tried several recipes, and every
one has been a hit with my family!"</p>
            <p class="user">- Lisa T.</p>
        </div>
    </div>
</section>

    <p class="total-users"><strong>Over 1,000 satisfied users have
tried our recipes!</strong></p>


    <!---------- You might also like ... ------------>
<div class="headingmostviewedrecipes">
    <h2 >You might also like...</h2>
</div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/Muhammar.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Muhammar</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Muhammar.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/machboosechicken.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Chicken Machboose</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Chicken-Machboose.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/baryani.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Lamb Baryani</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Lamb-Baryani.html" class="cardbtn">View Recipe</a>
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
    <script src="js/ShrimpBaryani.js"></script>
</body>
</html>