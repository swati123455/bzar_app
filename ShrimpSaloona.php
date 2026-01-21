<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrimp Saloona</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/ShrimpSaloona.css">
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
    

    <header class="header">
        <h1>Shrimp Saloona Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/shrimpSaloona.jpeg" alt="Shrimp saloona">
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
                    <li><input type="checkbox" id="ingredient1"><label for="ingredient1"><span data-quantity="2">2</span> Onions 🧅</label></li>
                    <li><input type="checkbox" id="ingredient2"><label for="ingredient2"><span data-quantity="4">4</span> tablespoons of sunflower oil</label></li>
                    <li><input type="checkbox" id="ingredient3"><label for="ingredient3"><span data-quantity="4">4</span> fresh tomatoes 🍅</label></li>
                    <li><input type="checkbox" id="ingredient4"><label for="ingredient4"><span data-quantity="1">1</span> KG Cleaned Jumbo shrimps 🦐 </label></li>
                    <li><input type="checkbox" id="ingredient5"><label for="ingredient5"><span data-quantity="3">3</span> tablespoons 🥄 of mix spices</label></li>
                    <li><input type="checkbox" id="ingredient6"><label for="ingredient6"><span data-quantity="1">1</span> tablespoon of cumin</label></li>
                    <li><input type="checkbox" id="ingredient7"><label for="ingredient7"><span data-quantity="1">1</span> small spoon of turmeric</label></li>
                    <li><input type="checkbox" id="ingredient8"><label for="ingredient8"><span data-quantity="1">1</span> parsley 🌿 bundle</label></li>
                    <li><input type="checkbox" id="ingredient9"><label for="ingredient9"><span data-quantity="1">1</span> tablespoon dry coriander</label></li>
                    <li><input type="checkbox" id="ingredient10"><label for="ingredient10"><span data-quantity="1">1</span> tablespoon chili flakes 🌶️</label></li>
                    <li><input type="checkbox" id="ingredient11"><label for="ingredient11"><span data-quantity="3">3</span> tablespoons salt 🧂</label></li>
                    <li><input type="checkbox" id="ingredient12"><label for="ingredient12"><span data-quantity="4">4</span> cloves of garlic 🧄</label></li>
                    <li><input type="checkbox" id="ingredient13"><label for="ingredient13"><span data-quantity="10">10</span> cups of water , pour into rice 🍚</label></li>
                    <li><input type="checkbox" id="ingredient14"><label for="ingredient14"><span data-quantity="2">2</span> potato 🥔, cut into slices</label></li>
                    <li><input type="checkbox" id="ingredient15"><label for="ingredient15"><span data-quantity="3">3</span> carrots 🥕, cut into slices</label></li>

                </ul>

                <h2>Instructions</h2>
                <ol>
                    <li>Heat the oil in a large cooking pot, add your onions and garlic, and sauté until it reaches a deep brown/gold color.</li>
                    <li>Cut your tomatoes into 4 pieces and add them with the onions and garlic to soften.</li>
                    <li>Add the shrimps to the pot followed by the spice blends listed above to marinate. Blend your ingredients until the shrimps is cooked.</li>
                    <li>Cut your carrots and potatoes and add them to the pot along with 10 cups of water, then cover for 40 minutes on low heat.</li>
                    <li>After 20-30 minutes, your Shrimp Saloona should be ready to eat with your choice of sides, rice, or bread.</li>
                    <li>Enjoy!</li>
                </ol>
            </div>
        </div>
    </div>

    <!---------  Testimonials Section ------->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p class="quote">"The Shrimp Stew is a masterpiece! The spices blend perfectly, and the flavors are so rich and comforting. A must-try!"</p>
                <p class="user">- Fatima R.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"This dish has become a weekly favorite in our house. The shrimp are so tender, and the stew is full of bold flavors!"</p>
                <p class="user">- Ahmed S.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"I was amazed at how easy this recipe was to follow. The Shrimp Stew turned out restaurant-quality. Highly recommended!"</p>
                <p class="user">- Nadia L.</p>
            </div>
        </div>

    </section>

    <p class="total-users"><strong>Over 1,000 satisfied users have tried our recipes!</strong></p>

    <!---------- You might also like ... ----------->
    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/lambsaloona.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Lamb Saloona</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="LambSaloona.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/chickensaloona.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Chicken Saloona</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="ChickenSaloona.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/Thareed.jpg" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Thareed</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Thareed.html" class="cardbtn">View Recipe</a>
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
        <script src="js/ShrimpSaloona.js"></script>
</body>
</html>
