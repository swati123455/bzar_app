<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicken Machboose</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="css/Chicken-Machboose.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
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
        <h1>Chicken Machboose Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/machboosechicken.JPG" alt="Chicken Machboose" />
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
                        <li><input type="checkbox" id="ingredient1"><label for="ingredient1"><span data-quantity="2">2</span> kg chicken 🐓</label></li>
                        <li><input type="checkbox" id="ingredient2"><label for="ingredient2"><span data-quantity="1">1</span> stick of cinnamon</label></li>
                        <li><input type="checkbox" id="ingredient3"><label for="ingredient3"><span data-quantity="2">2</span> onions 🧅</label></li>
                        <li><input type="checkbox" id="ingredient4"><label for="ingredient4"><span data-quantity="1">1</span> pinch 🤏 of sugar</label></li>
                        <li><input type="checkbox" id="ingredient5"><label for="ingredient5"><span data-quantity="1">1</span> bell pepper🫑</label></li>
                        <li><input type="checkbox" id="ingredient6"><label for="ingredient6"><span data-quantity="1">1</span> hot chili🌶️ (optional)</label></li>
                        <li><input type="checkbox" id="ingredient7"><label for="ingredient7"><span data-quantity="1">1</span> tbsp garlic🧄 paste</label></li>
                        <li><input type="checkbox" id="ingredient8"><label for="ingredient8"><span data-quantity="1">1</span> tbsp gingerpaste</label></li>
                        <li><input type="checkbox" id="ingredient9"><label for="ingredient9"><span data-quantity="1">1</span> tbsp mix spices</label></li>
                        <li><input type="checkbox" id="ingredient10"><label for="ingredient10"><span data-quantity="0.5">0.5</span> tsp cumin</label></li>
                        <li><input type="checkbox" id="ingredient11"><label for="ingredient11"><span data-quantity="1">1</span> tsp saffron powder</label></li>
                        <li><input type="checkbox" id="ingredient12"><label for="ingredient12"><span data-quantity="2">2</span> tbsp tomato paste</label></li>
                        <li><input type="checkbox" id="ingredient13"><label for="ingredient13"><span data-quantity="2">2</span> magi cubes (meat stock)</label></li>
                        <li><input type="checkbox" id="ingredient14"><label for="ingredient14"><span data-quantity="2">2</span> tsp salt🧂</label></li>
                        <li><input type="checkbox" id="ingredient15"><label for="ingredient15"><span data-quantity="2">2</span> cups jasmine rice 🍚</label></li>
                   
                </ul>
                    <h2>Instructions</h2>
                    
                <ol>
                    <li>Slice your onions and sauté them in a pot with
                        oil. Add all oyur mixed spices and stir.</li>
                    <li>Add your desired amount of rice with 4 cups of water to a separate pot.</li>
                    <li>Season oyur chicken with the same spice mixture you used to cook the onions and bake your chicken in
                        the oven for 20 minutes until partially cooked.</li>
                    <li>Transfer the chicken into the pot with the rice,
                        cover, and cook on low heat for 30 minutes.</li>
                    <li>After 30 minutes, it's ready to serve! Enjoy!</li>
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
            <img src="images/baryanifish.JPG" alt="">
        </div>
        <div class="content">
            <h2>Fish Baryani</h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="Fish-Baryani.html" class="cardbtn">View Recipe</a>
        </div>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/lambsaloona.JPG" alt="">
        </div>
        <div class="content">
            <h2>Lamb Saloona</h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="LambSaloona.html" class="cardbtn">View Recipe</a>
        </div>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/harees.JPG" alt="">
        </div>
        <div class="content">
            <h2>Harees</h2>
            <p>Here we will mention the ingredients and recipes.</p>
            <a href="Harees.html" class="cardbtn">View Recipe</a>
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
            <script src="js/Chicken-Machboose.js"></script>
</body>
</html>
