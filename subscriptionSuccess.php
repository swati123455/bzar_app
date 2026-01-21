<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/paymentSuccess.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Subscription Success</title>
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

    <!-- Subscription Success Section -->
    <div class="success-container">
        <h1>Subscription Successful!</h1>
        <p>Thank you for subscribing! Your subscription has been successfully processed.</p>
        <div class="success-details">
            <h2>Transaction ID: <span class="transaction-id"><?php echo 'TX' . rand(1000000000, 9999999999); ?></span></h2>
            
            <!-- Check if 'plan' is set -->
            <h3>Subscription Plan: 
                <span class="payment-method">
                    <?php echo isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : 'No Plan Selected'; ?>
                </span>
            </h3>
            
            <h3>Payment Method: <span class="payment-method">Credit Card</span></h3>
            <p>You will receive an email confirmation for your subscription. You can manage your subscription anytime.</p>
        </div>
        <div class="cta-buttons">
            <a href="Homepage.html" class="cta-button">Return to Homepage</a>
            <a href="MySubscriptions.html" class="cta-button">View My Subscriptions</a>
        </div>
    </div>

    <br>

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

</body>
</html>
