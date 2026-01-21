<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Tea</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Red-tea.css">
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
        <h1>Red Tea Recipe</h1>
    </header>

    <div class="row">
        <div class="imgWrapper">
            <img src="images/redtea.JPG" alt="Redtea" />
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
                        <label for="ingredient1"><span data-quantity="1">3</span> tablespoons of tea ☕️ </label></li>
                    <li><input type="checkbox" id="ingredient2">
                        <label for="ingredient2"><span data-quantity="1">3</span> cups of water 💧 </label></li>
                    <li><input type="checkbox" id="ingredient3">
                        <label for="ingredient3"><span data-quantity="2">2</span> tablespoons of rose 🌹 water </label></li>
                    <li><input type="checkbox" id="ingredient4">
                        <label for="ingredient4"><span data-quantity="3">1</span> Pinch of saffron 🤏 </label></li>
                    <li><input type="checkbox" id="ingredient5">
                        <label for="ingredient5"><span data-quantity="4">3</span> tablespoons of sugar</label></li>
                    
                </ul>
                <h2>Instructions</h2>
                <ol>
                    <li>Firstly, take the kettle and place it on the stove over low heat.</li>
                    <li>Secondly, add water to the kettle.</li>
                    <li>Third, add the rose water, tea, and sugar into the kettle, mixing them well with the added water.</li>
                    <li>Fourth, add saffron to enhance the flavour, and cover the kettle until it begins to bubble.</li>
                    <li>Finally, your tea is ready to be served</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p class="quote">"I absolutely loved the recipe! Easy to follow and delicious!"</p>
                <p class="user">- Sarah M.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"The best tea ever! The flavors are amazing, and the ingredients are so simple!"</p>
                <p class="user">- Sara D.</p>
            </div>
            <div class="testimonial">
                <p class="quote">"This is the best authentic Qatari tea recipes, and every one loves it in my family!"</p>
                <p class="user">- Khalid T.</p>
            </div>
        </div>
    </section>

    <p class="total-users"><strong>Over 1,200 satisfied users have tried our recipes!</strong></p>

    <div class="headingmostviewedrecipes">
        <h2>You might also like...</h2>
    </div>

   <div class="container"> <!-- Container for recipe cards -->
        <div class="card"> <!-- Individual recipe card -->
            <div class="imgBx"> 
                <img src="images/karak.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Karak</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Karak.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/hiso.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Hiso</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Hiso.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/SaffronMilk.png" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>SaffronMilk</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="SaffronMilk.html" class="cardbtn">View Recipe</a>
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

    <script src="Red-tea.js"></script>
</body>
</html>
