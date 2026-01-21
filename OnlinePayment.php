<?php
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']) && isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/OnlinePayment.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="Homepage.php"><img src="images/logo.png" alt="Bzar Logo"> Bzar </a>
            </div>
            <div class="nav-links">
                <a href="Homepage.php">Homepage</a>
                <a href="Recipes.php">Recipes</a>
                <a href="About-Us.php">About Us</a>
                <a href="Plus.php">Plus</a>
                <a href="Courses.php">Courses</a>
                <a href="Booking.php">Bookings</a>
                <a href="OurChefs.php">Our Chefs</a>
                
                <form id="searchForm" onsubmit="redirectToRecipe(event)">
                    <input type="text" id="searchBar" placeholder="Search recipes..." required>
                    <button type="submit">Search</button>
                </form>
            </div>

            <?php if (!$isLoggedIn): ?>
            <div id="login">
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Sign Up</button>
                <button type="button" onclick="window.location.href='LoginandSignup.php';">Login</button>
            </div>
            <?php else: ?>
            <div class="user-dropdown">
                <div class="user-toggle">
                    <img src="images/user-icon.png" alt="User Icon">
                    <span class="welcome-message">Welcome, <?= htmlspecialchars($username); ?>!</span>
                    <i class="fas fa-caret-down dropdown-icon"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a href="User-Profile.php">View Profile</a></li>
                    <li><a href="Settings.php">Settings</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>

            <?php endif; ?>
        </div>
    </nav>
    
    <div class="container">
        <div class="payment">
            <h1>Online Payment</h1>        
            <!----<form id="paymentForm" action="javascript:void(0);">--->
<form id="paymentForm" action="process_payment.php" method="POST">
    <div class="row">
        <div class="col">
            <h3 class="title">Billing Address</h3>
            <div class="inputBox">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="inputBox">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
            </div>
            <div class="inputBox">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter address" required>
            </div>
            <div class="inputBox">
                <label for="plan">Card Accepted</label>
                <div class="card-images">
                    <img src="images/apple-pay.png" alt="Apple Pay">
                    <img src="images/americanexpress.png" alt="American Express">
                    <img src="images/qnb.png" alt="QNB">
                    <img src="images/visa.png" alt="Visa">
                    <img src="images/paypal.png" alt="PayPal">
                </div>
            </div>
        </div>
        <div class="col">
            <h3 class="title">Payment</h3>
            <div class="inputBox">
                <label for="cardName">Name On Card:</label>
                <input type="text" id="cardName" name="cardName" placeholder="Enter card name" required>
            </div>
            <div class="inputBox">
                <label for="cardNum">Credit Card Number:</label>
                <input type="text" id="cardNum" name="cardNum" placeholder="0000 1111 2222 3333" maxlength="19" required>
            </div>
            <div class="inputBox">
                <label for="expMonth">Exp Month:</label>
                <select id="expMonth" name="expMonth" required>
                    <option value="">Choose month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <label for="expYear">Exp Year:</label>
                    <select id="expYear" name="expYear" required>
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
                    <input type="number" id="cvv" name="cvv" placeholder="1234" required>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Proceed to Checkout" class="submit_btn">
</form>

        </div>
    </div>

    <!-- Loading Spinner -->
    <div id="loadingSpinner" class="spinner" style="display:none;">
        <div class="loader"></div>
    </div>

    <!-- Popup Modal -->
    <div id="receiptPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Payment Receipt</h2>
            <p id="receiptDetails"></p>
            <p>Thank you! Your payment was successful. A confirmation email will be sent to you shortly.</p>
        </div>
    </div>

<!-- Footer Section -->
    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>BZAR</h3>
                <ul>
                    <li><a href="Homepage.php">Homepage</a></li>
                    <li><a href="Recipes.php">Recipes</a></li>
                    <li><a href="About-Us.php">About Us</a></li>
                    <li><a href="Plus.php">Plus</a></li>
                    <li><a href="Courses.php">Courses</a></li>
                    <li><a href="Booking.php">Booking</a></li>
                    <li><a href="OurChefs.php">Our Chefs</a></li>
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

    <script src="js/OnlinePayment.js"></script>
</body>
</html>