<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Plans</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Plus.css">
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
 
    <div class="status-message">
        <?php echo "Successful"; ?>
    </div>

    <div class="title">
        <h1 style="font-size: 50px;">Choose Your Plan</h1>
    </div>
    
<div class="plans">
    <div class="plan-card free-plan">
        <h2>Free Plan</h2>
        <p class="price">Free</p>
        <ul>
            <li>Search recipes by name</li>
            <li>Save recipes from the website</li>
            <li>Join a community of fellow cooking enthusiasts</li>
            <li>Gain access to over 25 recipes Qatari dishes </li>
        </ul>
        <img src="images/confirmation.png" alt="Free Plan Image" class="plan-image">
    </div>

    <div class="plan-card basic-plan">
        <h2>Basic Plan</h2>
        <p class="price">QAR 19.99 / Monthly</p>
        <ul>
            <li>Get a personalised feed with recipes based on your preferences</li>
            <li>Receive weekly recipe suggestions tailored to your taste</li>
            <li>Get ingredient substitution suggestions for dietary needs</li>
            <li>Automatically generate shopping lists based on selected recipes</li>
        </ul>
        <button class="subscribe-button">Subscribe</button>
    </div>

    <div class="plan-card advanced-plan">
        <h2>Advanced Plan</h2>
        <p class="price">QAR 99.99 / Yearly</p>
        <ul>
            <li>Enjoy exclusive recipes not available to free users</li>
            <li>Access detailed cooking guides and video tutorials</li>
            <li>Schedule virtual consultations with professional chefs</li>
            <li>Access exclusive discounts on cooking classes</li>
        </ul>
        <button class="subscribe-button">Subscribe</button>
    </div>
</div>
  
   <!-------- Footer with Reach Out Section --------->
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

    <script src="js/Plus.js"></script>
</body>
</html>
