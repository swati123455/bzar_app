<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ChefAljaziBio.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Chef Aljazi Al-Marzouqi</title>
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
        <img src="images/Aljazi.png" alt="Chef Aljazi Icon">
    </div>

    <!-- Chef Introduction -->
    <div class="chef-intro-container">
        <h1>Chef Aljazi Al-Marzouqi</h1>
        <h3>Culinary Artist</h3>
        <p>
            Chef Aljazi Al-Marzouqi is a renowned culinary artist known for her innovative approach to traditional Qatari dishes. 
            With over a decade of experience, Chef Aljazi has brought a modern twist to classic recipes, making her one of the most 
            celebrated chefs in the region.
        </p>
        <p>
            Her passion for culinary arts began at an early age, inspired by her family’s rich culinary traditions. Today, she is dedicated 
            to preserving Qatari heritage through food while incorporating global influences. Join her on this journey to explore 
            the art of cooking and storytelling through flavors.
        </p>
    </div>
</div>

    
    
<!-- Certificates Section -->
<div class="certificates-section">
    <img src="images/4.png" alt="Certificate 1" class="certificate" onclick="viewCertificate('images/4.png')">
    <img src="images/4.2.png" alt="Certificate 2" class="certificate" onclick="viewCertificate('images/4.2.png')">
    <img src="images/4.3.png" alt="Certificate 3" class="certificate" onclick="viewCertificate('images/4.3.png')">
</div>

<!-- Modal for viewing certificates -->
<div id="certificateModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage" class="modal-content" alt="Certificate">
</div>

    
    
<!-- Courses Section -->
<div class="courses-section">
    <h2 class="main-heading">Dishes by Chef Aljazi Al-Marzouqi</h2> 

    <!-- Course Category: Main Dishes -->
    <div class="course-category">
        <h3>Main Dishes</h3>
        <div class="card">
            <img src="images/majboose.JPG" alt="Lamb Machboose" class="card-img">
            <h4>Lamb Machboose</h4>
            <p>A traditional Qatari dish made with spiced lamb and rice.</p>
            <div class="card-details">
                <span>⏱️ 1 hr 30 mins</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Lamb-Machboose.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/machboosechicken.JPG" alt="Chicken Machboose" class="card-img">
            <h4>Chicken Machboose</h4>
            <p>A flavorful dish made with rice and chicken, seasoned with a variety of spices.</p>
            <div class="card-details">
                <span>⏱️ 1 hr</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Chicken-Machboose.html';">View Recipe</button>

        </div>
        <div class="card">
            <img src="images/Muhammar.JPG" alt="Muhammar" class="card-img">
            <h4>Muhammar</h4>
            <p>This dish includes white rice with yellow rice mixed together and fried fish on top.</p>
            <div class="card-details">
                <span>⏱️ 2 hrs</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Muhammar.html';">View Recipe</button>
        </div>

    </div>
    
        <!-- Course Category: Desserts -->
    <div class="course-category">
        <h3>Desserts</h3>
        <div class="card">
            <img src="images/lugaimathoney.JPG" alt="Honey Lugaimat" class="card-img">
            <h4>Honey Lugaimat</h4>
            <p>This is a dessert in qatars cusine and it contains fried pastry with honey sauce..</p>
            <div class="card-details">
                <span>⏱️ 1 hr 30 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='HoneyLugaimat.html';">View Recipe</button>
        </div>
        <div class="card">
            <img src="images/gaimatdebs.JPG" alt="Debs Lugaimat" class="card-img">
            <h4>Debs Lugaimat</h4>
            <p>This is a dessert in qatars cusine and it contains fried pastry with debs sauce.</p>
            <div class="card-details">
                <span>⏱️ 1 hr 30 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Chicken-Machboose.html';">View Recipe</button>

        </div>
        <div class="card">
            <img src="images/mahlbiyataish.JPG" alt="Mahlbiyat Aish" class="card-img">
            <h4>Mahlbiyat Aish</h4>
            <p>This is a dessert and it contains gelation with powdered milk</p>
            <div class="card-details">
                <span>⏱️ 2 hrs</span>
                <span>🌶️ Medium</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Muhammar.html';">View Recipe</button>
        </div>
    </div>
    
    <!-- Course Category: Drinks -->
    <div class="course-category">
        <h3>Drinks</h3>
        <div class="card">
            <img src="images/rosemilk.JPG" alt="Rose Milk" class="card-img">
            <h4>Rose Milk</h4>
            <p>A refreshing drink made with milk and flavored with rose syrup, ideal for hot days.</p>
            <div class="card-details">
                <span>⏱️ 45 mins</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='RoseMilk.html';">View Recipe</button>            
        </div>
        <div class="card">
            <img src="images/karak.JPG" alt="Karak" class="card-img">
            <h4>Karak</h4>
            <p>A famous Qatari drink made with evaporated or caned milk mixed with tea</p>
            <div class="card-details">
                <span>⏱️ 1 hr</span>
                <span>🌶️ Easy</span>
            </div>
            <button class="view-recipe-btn" onclick="window.location.href='Karak.html';">View Recipe</button>
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
<script src="js/ChefAljaziBio.js"></script>

</body>
</html>
    
    