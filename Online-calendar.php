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
    <title>Online Classes Calendar</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Online-calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>


    <!-- Navigation Bar -->
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
    
    

    <main>
  <div class="calendar-wrapper">

    <div class="calendar">
      <h1>December 2028</h1>
      <p>Personal classes available for this month! Click to book.</p>




      
      <ul id="class-list">
      
      <li data-fee="44"><time datetime="2028-12-01">1</time>Chicken Machboose 14:00 - 16:00 <price>Qar 44</price></li>
          <li data-fee="18"><time datetime="2028-12-02">2</time>Khanfaroosh 15:00 - 16:00 <price>Qar 18</price></li>
          <li data-fee="33"><time datetime="2028-12-03">3</time>Shakshuka 09:00 - 10:30 <price>Qar 33</price></li>
          <li data-fee="62"><time datetime="2028-12-04">4</time>Shrimp Baryani 17:00 - 19:00 <price>Qar 62</price></li>
          <li data-fee="29"><time datetime="2028-12-05">5</time>Blaleet 10:00 - 11:30 <price>Qar 29</price></li>
         <li data-fee="11"><time datetime="2028-12-06">6</time>Karak 13:00 - 14:00 <price>Qar 11</price></li>
         <li data-fee="51"><time datetime="2028-12-07">7</time>Lamb Saloona 16:00 - 18:00 <price>Qar 51</price></li>
         <li data-fee="66"><time datetime="2028-12-08">8</time>Lamb Baryani 14:00 - 16:00 <price>Qar 66</price></li>
         <li data-fee="36"><time datetime="2028-12-09">9</time>Harees 11:00 - 13:00 <price>Qar 36</price></li>
         <li data-fee="50"><time datetime="2028-12-10">10</time>Chicken Saloona 10:00 - 12:00 <price>Qar 50</price></li>
         <li data-fee="55"><time datetime="2028-12-11">11</time>Fish Baryani 15:00 - 17:00 <price>Qar 55</price></li>
         <li data-fee="65"><time datetime="2028-12-12">12</time>Shrimp Baryani 09:00 - 11:00 <price>Qar 65</price></li>
         <li data-fee="40"><time datetime="2028-12-13">13</time>Saloona (Vegetables) 14:00 - 16:00 <price>Qar 40</price></li>
         <li data-fee="55"><time datetime="2028-12-14">14</time>Shakshuka 11:00 - 12:30 <price>Qar 55</price></li>
         <li data-fee="29"><time datetime="2028-12-15">15</time>Blaleet 15:00 - 16:30 <price>Qar 29</price></li>
         <li data-fee="18"><time datetime="2028-12-16">16</time>Khanfaroosh 12:00 - 13:00 <price>Qar 18</price></li>
         <li data-fee="44"><time datetime="2028-12-17">17</time>Madrooba 14:00 - 15:30 <price>Qar 44</price></li>
         <li data-fee="11"><time datetime="2028-12-18">18</time>Karak 10:00 - 11:00 <price>Qar 11</price></li>
         <li data-fee="36"><time datetime="2028-12-19">19</time>Harees 11:00 - 13:00 <price>Qar 36</price></li>
         <li data-fee="51"><time datetime="2028-12-20">20</time>Lamb Saloona 17:00 - 19:00 <price>Qar 51</price></li>
         <li data-fee="44"><time datetime="2028-12-21">21</time>Chicken Machboose 09:00 - 11:00 <price>Qar 44</price></li>
         <li data-fee="40"><time datetime="2028-12-22">22</time>Saloona (Vegetables) 15:00 - 17:00 <price>Qar 40</price></li>
         <li data-fee="66"><time datetime="2028-12-23">23</time>Lamb Baryani 13:00 - 15:00 <price>Qar 66</price></li>
         <li data-fee="62"><time datetime="2028-12-24">24</time>Shrimp Baryani 09:00 - 11:00 <price>Qar 62</price></li>
         <li data-fee="40"><time datetime="2028-12-25">25</time>Khanfaroosh 16:00 - 17:00 <price>Qar 40</price></li>
         <li data-fee="11"><time datetime="2028-12-26">26</time>Karak 11:00 - 12:00 <price>Qar 11</price></li>
         <li data-fee="33"><time datetime="2028-12-27">27</time>Shakshuka 13:00 - 14:30 <price>Qar 33</price></li>
         <li data-fee="36"><time datetime="2028-12-28">28</time>Harees 09:00 - 11:00 <price>Qar 36</price></li>
         <li data-fee="22"><time datetime="2028-12-29">29</time>Khanfaroosh 10:00 - 11:00 <price>Qar 22</price></li>
         <li data-fee="29"><time datetime="2028-12-30">30</time>Blaleet 12:00 - 13:30 <price>Qar 29</price></li>
         <li data-fee="18"><time datetime="2028-12-31">31</time>Khanfaroosh 12:00 - 13:00 <price>Qar 18</price></li>
         
             </ul>
    </div>

    
    <div class="booking-summary">
        <h2>Your Selected Classes</h2>
        <ul id="selected-classes"></ul>
        <p id="total-amount">Total: QAR 0</p>
        <button id="checkout-button">Next</button>
    </div>
        </div>
    </main>

    
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

    <script src="js/Online-calendar.js"></script>
</body>
</html>
