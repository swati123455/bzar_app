<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Character encoding for the document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
    <title>Online Payment</title> <!-- Title of the webpage -->
    <link rel="icon" type="image/x-icon" href="images/logo.png"> <!-- Favicon for the site -->
    <link rel="stylesheet" href="css/Subscription.css"> <!-- Link to the main stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome icons -->

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
    
<div class="container">
    <div class="payment"> 
        <h1>Online Payment</h1>        
        <form id="paymentForm" action="process_payment.php" method="POST" onsubmit="showPaymentProcessing(); return false;">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="inputBox">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Enter email address" required>
                    </div>
                    <div class="inputBox">
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" placeholder="Enter address" required>
                    </div>
                    <div class="inputBox">
                        <label for="plan">Choose your plan:</label>
                        <select name="plan" id="plan" required>
                            <option value="">Plan</option>
                            <option value="Monthly">Monthly Qar 19.99</option>
                            <option value="Yearly">Yearly Qar 99.99</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                        <label for="cardName">Name On Card:</label>
                        <input type="text" name="cardName" id="cardName" placeholder="Enter card name" required>
                    </div>
                    <div class="inputBox">
                        <label for="cardNum">Credit Card Number:</label>
                        <input type="text" name="cardNum" id="cardNum" placeholder="0000-1111-2222-3333" maxlength="19" required>
                    </div>
                    <div class="inputBox">
                        <label for="expMonth">Exp Month:</label>
                        <select name="expMonth" id="expMonth" required>
                            <option value="">Choose month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <label for="expYear">Exp Year:</label>
                            <select name="expYear" id="expYear" required>
                                <option value="">Choose Year</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="cvv">CVV:</label>
                            <input type="text" name="cvv" id="cvv" placeholder="123" maxlength="3" required>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Proceed to Checkout" class="submit_btn"> <!-- Submit button -->
        </form>
    </div>
</div>

<!-- Loading Spinner -->
<div id="loadingSpinner" class="spinner" style="display:none;">
    <div class="loader"></div>
</div>

<!-- Popup Modal for Receipt Confirmation -->
<div id="receiptPopup" class="popup"> 
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Payment Receipt</h2>
        <p id="receiptDetails">Your payment is being processed...</p>
        <p>Thank you! Your payment was successful. A confirmation email will be sent to you shortly.</p>
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
    
    <script src="js/Subscription.js"></script> <!-- Link to the JavaScript file for functionality -->
</body>
</html>