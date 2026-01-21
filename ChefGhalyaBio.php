<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ChefGhalyaBio.css">     
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Chef Ghalya Al-Khuzaei</title>
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
        <img src="images/ghalya.png" alt="Chef Ghalya Icon">
    </div>

    <!-- Chef Introduction -->
    <div class="chef-intro-container">
    <h1>Chef Ghalya Al-Khuzaei</h1>
    <h3>Sous Chef</h3>
    <p>
        Chef Ghalya Al-Khuzaei is a talented Sous Chef known for her dedication to preserving the essence of Qatari cuisine. Her expertise in balancing tradition and innovation has earned her recognition as one of the rising stars in the culinary world.
    </p>
    <p>
        Chef Ghalya’s passion for cooking began during her childhood, inspired by the flavors of her homeland and her family’s love for sharing meals together. She is committed to creating dishes that honor Qatar’s heritage while introducing modern techniques and global influences. Embark on a culinary journey with Chef Ghalya and discover the beauty of flavors brought to life with precision and creativity.
    </p>

    </div>
</div>

    
    
<!-- Certificates Section -->
<div class="certificates-section">
    <img src="images/3.png" alt="Certificate 1" class="certificate" onclick="viewCertificate('images/3.png')">
    <img src="images/3.2.png" alt="Certificate 2" class="certificate" onclick="viewCertificate('images/3.2.png')">
    <img src="images/3.3.png" alt="Certificate 3" class="certificate" onclick="viewCertificate('images/3.3.png')">
</div>

<!-- Modal for viewing certificates -->
<div id="certificateModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage" class="modal-content" alt="Certificate">
</div>

    
    
<!-- Courses Section -->
<div class="courses-section">
    <h2 class="main-heading">Dishes by Chef Ghalya Al-Khuzaei</h2> 

    <!-- Course Category: Main Dishes -->
    <div class="course-category">
        <h3>Main Dishes</h3>
        <div class="card">
            <img src="images/Thareed.jpg" alt="Thareed" class="card-img">
            <h4>Thareed</h4>
            <p>This dish contains meat soup that is soaked in bread, it's mainly eaten at lunch or dinner.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Thareed.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/madrooba.JPG" alt="Madrooba" class="card-img">
            <h4>Madrooba</h4>
            <p>Qatari Madrooba is a popular and nutritious dish in Qatari cuisine, enriched with spices that enhance its flavor and offer health benefits.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Madrooba.html';">View Recipe</button>

        </div>
        <div class="card">
            <img src="images/Harees.JPG" alt="Harees" class="card-img">
            <h4>Harees</h4>
            <p>Harees consists of meat and unground or broken wheat. The mash contains a large wooden whisk with which the mash grains are crushed and beaten.</p>
            <div class="card-details">
                <span>⏱️ 3 hrs</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Harees.html';">View Recipe</button>
        </div>

    </div>
    
        <!-- Course Category: Breakfast and Appetizers -->
    <div class="course-category">
        <h3>Breakfast and Appetizers</h3>
        <div class="card">
            <img src="images/Blaleet.JPG" alt="Balaleet" class="card-img">
            <h4>Balaleet</h4>
            <p>This dish is a popular Qatari breakfast, featuring thin sweet pasta with eggs on top.</p>
            <div class="card-details">
                <span>⏱️ 45 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Balaleet.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/Shakshouka.JPG" alt="Shakshouka" class="card-img">
            <h4>Shakshouka</h4>
            <p>Shakshuka is a dish of eggs poached in tomato sauce, olive oil, peppers, onions and garlic, usually seasoned with cumin, paprika and chili pepper. Shakshuka is usaualy served in breakfast.</p>
            <div class="card-details">
                <span>⏱️ 30 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Shakshouka.html';">View Recipe</button>

        </div>
        <div class="card">
            <img src="images/sambosa.JPG" alt="Cheese Sambosa" class="card-img">
            <h4>Cheese Sambosa</h4>
            <p>A delicious appetizer with puff pastry and cheese filling.</p>
            <div class="card-details">
                <span>⏱️ 45 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Sambosa.html';">View Recipe</button>
        </div>
    </div>
    
    <!-- Course Category: Drinks -->
    <div class="course-category">
        <h3>Drinks</h3>
        <div class="card">
            <img src="images/hiso.JPG" alt="Hiso" class="card-img">
            <h4>Hiso</h4>
            <p>A warm drink made with Hiso seeds, served around winter time to warm up your body.</p>
            <div class="card-details">
                <span>⏱️ 1 hr 30 mins</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Hiso.html';">View Recipe</button>            
        </div>
        <div class="card">
            <img src="images/arabicCoffee.png" alt="Arabic Coffee" class="card-img">
            <h4>Arabic Coffee</h4>
            <p>A"Arabic coffee” is a popular drink that has been enjoyed for centuries throughout qatar's tradition. It is made from lightly roasted coffee beans, usually cardamom, and served hot in small cups.</p>
            <div class="card-details">
                <span>⏱️ 1 hr</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Arabiccoffee.html';">View Recipe</button>
        </div>
        <!-- Repeat for other dishes -->
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

<script src="js/ChefGhalyaBio.js"></script>

</body>
</html>
    