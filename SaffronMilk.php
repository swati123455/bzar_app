<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design for mobile devices -->
    <title>Saffron Milk</title> <!-- Page title -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the website -->
    <link rel="stylesheet" href="css/SaffronMilk.css"> <!-- Link to the CSS file for styling -->
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
        <h1>Saffron Milk Recipe</h1> <!-- Title of the recipe -->
    </header>

    <!-- Recipe Display Section -->
    <div class="row">
        <div class="imgWrapper">
            <img src="images/SaffronMilk.png" alt="Saffron Milk" /> <!-- Image of Arabic Coffee -->
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
                <ul class="ingredients-list"> <!-- List of ingredients -->
                    <li>
                        <input type="checkbox" id="ingredient1"> <!-- Checkbox for ingredient -->
                        <label for="ingredient1">
                            <span data-quantity="2">2</span> cups of milk 🥛
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient2">
                        <label for="ingredient2">
                            <span data-quantity="1">1</span> tablespoon of sugar (adjust to taste)
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient3">
                        <label for="ingredient3">
                            <span data-quantity="1/4">1/4</span> teaspoon of saffron threads
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient4">
                        <label for="ingredient4">
                            <span data-quantity="1">1</span> cardamom pod (lightly crushed)
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ingredient5">
                        <label for="ingredient5">
                            <span data-quantity="1">1</span> teaspoon of rose water
                        </label>
                    </li>
                
                </ul>

                <h2>Instructions</h2>
                <ol> <!-- Ordered list of instructions -->
                    <li>Pour the milk into a saucepan and heat it over low to medium heat. Be careful not to let it boil.</li>
                    <li>Add the saffron threads and lightly crushed cardamom pod to the milk, stirring gently.</li>
                    <li>Allow the mixture to simmer for about 5-7 minutes, so the flavors infuse into the milk.</li>
                    <li>Add sugar and stir until it dissolves completely. Adjust the sweetness to your liking.</li>
                    <li>Stir in the rose water and let the milk warm for another minute.</li>
                    <li>Strain the milk to remove the cardamom pod, if desired.</li>
                    <li>Pour into cups, garnish with few strands of saffron, and serve hot.</li>
                    <li>Enjoy the rich and aromatic flavors of Qatari Saffron Milk!</li>
                </ol>

        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What People Are Saying</h2>
        <div class="testimonial-container"> <!-- Container for testimonials -->
        <div class="testimonial">
            <p class="quote">"The Traditional Qatari Saffron Milk has become my go-to comfort drink. It's soothing and so easy to make!"</p>
            <p class="user">- Amal A.</p> <!-- User who provided the testimonial -->
        </div>
        <div class="testimonial">
            <p class="quote">"I never thought something so simple could taste so amazing. A perfect balance of warmth and flavor!"</p>
            <p class="user">- Omar E.</p>
        </div>
        <div class="testimonial">
            <p class="quote">"This recipe reminds me of home! The Saffron make it so special. A must-try for everyone."</p>
            <p class="user">- Fatima M.</p>
        </div>
        </div>

    </section>

    <p class="total-users"><strong>Over 1,400 satisfied users have tried our recipes!</strong></p>

    <!-- You Might Also Like Section -->
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
                <img src="images/rosemilk.JPG" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>RoseMilk</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="RoseMilk.html" class="cardbtn">View Recipe</a>
            </div>
        </div>

        <div class="card"> <!-- Another recipe card -->
            <div class="imgBx"> 
                <img src="images/arabicCoffee.png" alt=""> <!-- Image for the recipe -->
            </div>
            <div class="content">
                <h2>Arabic Coffee</h2> <!-- Recipe title -->
                <p>Here we will mention the ingredients and recipes.</p> <!-- Brief description -->
                <a href="Arabiccoffee.html" class="cardbtn">View Recipe</a>
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

    <script src="js/SaffronMilk.js"></script> <!-- Link to external JavaScript file -->
</body>
</html>