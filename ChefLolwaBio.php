<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ChefLolwaBio.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Chef Lolwa Al-Faddalah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
 
    
    
  <div class="chef-bio-section">
    <!-- Chef Icon -->
    <div class="chef-icon-container">
        <img src="images/lolwa.png" alt="Chef Lolwa Icon">
    </div>

    <!-- Chef Introduction -->
    <div class="chef-intro-container">
    <h1>Chef Lolwa Al-Faddalah</h1>
    <h3>Head Chef</h3>
    <p>
        Chef Lolwa Al-Faddalah is a visionary Head Chef recognized for her leadership in the kitchen and her ability to craft menus that blend tradition with innovation. Her expertise and dedication have made her a respected figure in the culinary world.
    </p>
    <p>
        With years of experience leading teams and curating exceptional dining experiences, Chef Lolwa is passionate about showcasing Qatari cuisine on a global stage. Her philosophy revolves around using fresh, local ingredients to create dishes that tell a story. Join Chef Lolwa as she redefines culinary excellence through her leadership and creativity.
    </p>

    </div>
</div>

    
    
<!-- Certificates Section -->
<div class="certificates-section">
    <img src="images/1.png" alt="Certificate 1" class="certificate" onclick="viewCertificate('images/1.png')">
    <img src="images/1.2.png" alt="Certificate 2" class="certificate" onclick="viewCertificate('images/1.2.png')">
    <img src="images/1.3.png" alt="Certificate 3" class="certificate" onclick="viewCertificate('images/1.3.png')">
</div>

<!-- Modal for viewing certificates -->
<div id="certificateModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage" class="modal-content" alt="Certificate">
</div>

    
    
<!-- Courses Section -->
<div class="courses-section">
    <h2 class="main-heading">Dishes by Chef Lolwa Al-Faddalah</h2> 

    <!-- Course Category: Main Dishes -->
    <div class="course-category">
        <h3>Main Dishes</h3>
        <div class="card">
            <img src="images/lambsaloona.JPG" alt="Lamb Saloona" class="card-img">
            <h4>Lamb Saloona</h4>
            <p>A delicious lamb stew served with rice or bread.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='LambSaloona.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/chickensaloona.JPG" alt="chicken Saloona" class="card-img">
            <h4>Chicken Saloona</h4>
            <p>A delicious chicken stew served with rice or bread.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='ChickenSaloona.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/shrimpSaloona.jpeg" alt="Shrimp Saloona" class="card-img">
            <h4>Shrimp Saloona</h4>
            <p>A delicious shrimp stew served with rice or bread.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='ShrimpSaloona.html';">View Recipe</button>
        </div>

    </div>
    
            <!-- Course Category: Breakfast and Appetizers -->
    <div class="course-category">
        <h3>Breakfast and Appetizers</h3>
        <div class="card">
            <img src="images/Nakhi.png" alt="Nakhi" class="card-img">
            <h4>Nakhi</h4>
            <p>A hearty stew made with mashed chickpeas, tahini, lemon, garlic, and olive oil.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Nakhi.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/bajilla.png" alt="Bajilla" class="card-img">
            <h4>Bajilla</h4>
            <p>A hearty stew made with Fava beans eaten warm on cold mornings.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Bajilla.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/Regag.png" alt="Regag" class="card-img">
            <h4>Regag</h4>
            <p>Regag Bread is a Qatari thin and crispy crepe-like texture. This traditional bread is topped with egg, cheese, or honey.</p>
            <div class="card-details">
                <span>⏱️ 1 hr 30 mins</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Regag.html';">View Recipe</button>
        </div>
    </div>
    
    
    <!-- Course Category: Drinks -->
    <div class="course-category">
        <h3>Drinks</h3>
        <div class="card">
            <img src="images/gingerMilk.png" alt="Ginger Milk" class="card-img">
            <h4>Ginger Milk</h4>
            <p>This is a warm soothing flavors of traditional Qatari Ginger Milk.</p>
            <div class="card-details">
                <span>⏱️ 35 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='GingerMilk.html';">View Recipe</button>            
        </div>       
        
        <div class="card">
            <img src="images/SaffronMilk.png" alt="Saffron Milk" class="card-img">
            <h4>Saffron Milk</h4>
            <p>This is a warm soothing flavors of traditional Qatari Saffron Milk.</p>
            <div class="card-details">
                <span>⏱️ 45 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='SaffronMilk.html';">View Recipe</button>            
        </div>
        
    </div>
    <!-- Additional categories follow the same pattern -->
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
<script src="js/ChefLolwaBio.js"></script>

</body>
</html>
    
    