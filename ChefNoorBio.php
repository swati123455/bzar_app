<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ChefNoorBio.css">     
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title>Chef Noor Mohammed</title>
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

    
<div class="chef-bio-section">
    <!-- Chef Icon -->
    <div class="chef-icon-container">
        <img src="noor.png" alt="Chef Noor Icon">
    </div>

    <!-- Chef Introduction -->
    <div class="chef-intro-container">
    <h1>Chef Noor Mohammed</h1>
    <h3>Pastry Chef</h3>
    <p>
        Chef Noor Mohammed is a gifted Pastry Chef celebrated for her exquisite desserts and masterful techniques. Known for her ability to transform simple ingredients into works of art, she has become a prominent name in the world of pastries and confectionery.
    </p>
    <p>
        Chef Noor’s journey into the culinary arts began with a fascination for the science and creativity behind baking. Over the years, she has honed her craft, blending traditional recipes with innovative designs to create desserts that are as visually stunning as they are delicious. Join Chef Noor in exploring the sweet side of culinary artistry and experience the magic of perfectly crafted treats.
    </p>

    </div>
</div>

    
    
<!-- Certificates Section -->
<div class="certificates-section">
    <img src="2.png" alt="Certificate 1" class="certificate" onclick="viewCertificate('2.png')">
    <img src="2.2.png" alt="Certificate 2" class="certificate" onclick="viewCertificate('2.2.png')">
    <img src="2.3.png" alt="Certificate 3" class="certificate" onclick="viewCertificate('2.3.png')">
</div>

<!-- Modal for viewing certificates -->
<div id="certificateModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage" class="modal-content" alt="Certificate">
</div>

    
    
<!-- Courses Section -->
<div class="courses-section">
    <h2 class="main-heading">Dishes by Chef Noor Mohammed</h2> 

    <!-- Course Category: Main Dishes -->
    <div class="course-category">
        <h3>Main Dishes</h3>
        <div class="card">
            <img src="baryani.JPG" alt="Lamb Baryani" class="card-img">
            <h4>Lamb Baryani</h4>
            <p>This dish contains white rice with lamb on top, mixed with onions and chickpeas.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Lamb-Baryani.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="baryanishrimp.JPG" alt="ShrimpBaryani" class="card-img">
            <h4>Shrimp Baryani</h4>
            <p>This dish contains boiled shrimps with mixed yellow and white rice.</p>
            <div class="card-details">
               <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='ShrimpBaryani.html';">View Recipe</button>

        </div>
        <div class="card">
            <img src="baryanifish.JPG" alt="Fish Baryani" class="card-img">
            <h4>Fish Baryani</h4>
            <p>This dish includes white rice with yellow rice mixed together and fried fish on top.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs 30 mins</span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Fish-Baryani.html';">View Recipe</button>
        </div>

    </div>
    
        <!-- Course Category: Desserts -->
    <div class="course-category">
        <h3>Desserts</h3>
        <div class="card">
            <img src="Khanfaroosh.JPG" alt="Khanfaroosh" class="card-img">
            <h4>Khanfaroosh</h4>
            <p>This is a famouse dessert, which is a mini saffron cake.</p>
            <div class="card-details">
                <span>⏱️ 1 hr 30 mins</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Khanfaroosh.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="castard.JPG" alt="Custard" class="card-img">
            <h4>Custard</h4>
            <p>A Qatari dessert containing gelatin and vanilla mixed together.</p>
            <div class="card-details">
                <span>⏱️ 45 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Custard.html';">View Recipe</button>

        </div>
        
        <div class="card">
            <img src="maamoul.png" alt="Maamoul" class="card-img">
            <h4>Maamoul</h4>
            <p>A handmade Qatari dessert shortbread cookie pressed into a carved, wooden mold and stuffed with a variety of fillings such as date paste, pistachios and almonds</p>
            <div class="card-details">
                <span>⏱️ 3 hrs </span>
                <span>🌶️ Hard</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Maamoul.html';">View Recipe</button>

        </div>
 
    </div>
    
    <!-- Course Category: Drinks -->
    <div class="course-category">
        <h3>Drinks</h3>
        <div class="card">
            <img src="redtea.JPG" alt="Read tea" class="card-img">
            <h4>Read tea</h4>
            <p>This is a warm drink that qatari people drink in any occasion, this drink contains water, suger and tea.</p>
            <div class="card-details">
                <span>⏱️ 45 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Read-tea.html';">View Recipe</button>            
        </div>
        
    </div>
    <!-- Additional categories follow the same pattern -->
</div>

    
    
    
          <!--------Footer with Reach Out section--------->
    <footer>
        <div class="footer-container">
            <h2 class="footer-heading">Reach Out</h2>
            <div class="reach-out">
                <a href="mailto:BZAR@gmail.com" title="Email Us">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="tel:+97412345678" title="Call Us">
                    <i class="fa fa-phone"></i>
                </a>
                <a href="https://wa.me/97412345678" title="WhatsApp Us" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://facebook.com" title="Facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" title="Twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com" title="Instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <p>Made with ♡ in Qatar</p>
        <p>© 2028 Bzar. All rights reserved.</p>
    </footer>

<script src="ChefNoorBio.js"></script>

</body>
</html>
    
    