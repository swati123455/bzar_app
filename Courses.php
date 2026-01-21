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
    <title>Courses</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Courses.css">
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

    <!-- Main Courses Section -->
    <section class="courses-container">
        <h2>Main Courses</h2>
        <p>Explore our selection of main course dishes, carefully crafted to bring out the best flavors in every bite.</p>

        <div class="dishes-grid">
            <div class="dish-container">
                <a href="Chicken-Machboose.php">Chicken Machboos</a>
                <img src="images/machboosechicken.JPG" alt="Chicken Machboos" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Lamb-Machboose.php">Lamb Machboos</a>
                <img src="images/majboose.JPG" alt="Lamb Machboos" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Thareed.php">Thareed</a>
                <img src="images/Thareed.jpg" alt="Thareed" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Harees.php">Harees</a>
                <img src="images/Harees.jpg" alt="Harees" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Madrooba.php">Madrooba</a>
                <img src="images/Madrooba.jpg" alt="Madrooba" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="ShrimpSaloona.php">Shrimp Saloona</a>
                <img src="images/shrimpSaloona.jpeg" alt="Shrimp Saloona" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="LambSaloona.php">Lamb Saloona</a>
                <img src="images/lambsaloona.JPG" alt="Lamb Saloona" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="ChickenSaloona.php">Chicken Saloona</a>
                <img src="images/chickensaloona.JPG" alt="Chicken Saloona" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Muhammar.php">Muhammar</a>
                <img src="images/Muhammar.jpg" alt="Muhammar" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Fish-Baryani.php">Fish Baryani</a>
                <img src="images/baryanifish.JPG" alt="Fish Baryani" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Lamb-Baryani.php">Lamb Baryani</a>
                <img src="images/baryani.jpg" alt="Lamb Baryani" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="ShrimpBaryani.php">Shrimp Baryani</a>
                <img src="images/baryanishrimp.JPG" alt="Shrimp Baryani" class="dish-image">
            </div>
        </div>

        <button onclick="window.location.href='Booking.php'">Book Your Course!</button>
    </section> 
    
    <!-- Breakfast & Appetizers Courses Section -->
    <section class="courses-container">
        <h2>Breakfast & Appetizers Courses</h2>
        <p>Explore our selection of main course dishes, carefully crafted to bring out the best flavors in every bite.</p>

        <div class="dishes-grid">
            <div class="dish-container">
                <a href="Balaleet.php">Balaleet</a>
                <img src="images/Blaleet.JPG" alt="Balaleet" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Nakhi.php">Nakhi</a>
                <img src="images/Nakhi.png" alt="Nakhi" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Sambosa.php">Cheese Samboosa</a>
                <img src="images/sambosa.JPG" alt="Cheese Samboosa" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Shakshuka.php">Shakshuka</a>
                <img src="images/Shakshouka.JPG" alt="Shakshuka" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Regag.php">Regag</a>
                <img src="images/Regag.png" alt="Regag" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Bajilla.php">Bajilla</a>
                <img src="images/bajilla.png" alt="Bajilla" class="dish-image">
            </div>
        </div>

        <button onclick="window.location.href='Booking.php'">Book Your Course!</button>
    </section>

    <!-- Desserts Courses Section -->
    <section class="courses-container">
        <h2>Desserts Courses</h2>
        <p>Explore our selection of main course dishes, carefully crafted to bring out the best flavors in every bite.</p>

        <div class="dishes-grid">
            <div class="dish-container">
                <a href="HoneyLugaimat.php">Honey Lugaimat</a>
                <img src="images/lugaimathoney.JPG" alt="Honey Lugaimat" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="DebsLugaimat.php">Debs Lugaimat</a>
                <img src="images/gaimatdebs.jpg" alt="Debs Lugaimat" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Custard.php">Custard</a>
                <img src="images/castard.JPG" alt="Custard" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="MahalabiaAish.php">Mahalabia Aish</a>
                <img src="images/mahlbiyataish.JPG" alt="Mahalabia Aish" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Maamoul.php">Maamoul</a>
                <img src="images/maamoul.png" alt="Maamoul" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Khanfaroosh.php">Khanfaroosh</a>
                <img src="images/Khanfaroosh.JPG" alt="Khanfaroosh" class="dish-image">
            </div>
        </div>

        <button onclick="window.location.href='Booking.php'">Book Your Course!</button>
    </section>

    <!-- Drinks Courses Section -->
    <section class="courses-container">
        <h2>Drinks Courses</h2>
        <p>Explore our selection of drink course dishes, carefully crafted to bring out the best flavors in every bite.</p>

        <div class="dishes-grid">
            <div class="dish-container">
                <a href="Karak.php">Karak</a>
                <img src="images/Karak.jpg" alt="Karak" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Arabiccoffee.php">Arabic Coffee</a>
                <img src="images/arabicCoffee.png" alt="Arabic Coffee" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Red-tea.php">Red tea</a>
                <img src="images/redtea.JPG" alt="Red tea" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="Hiso.php">Hiso</a>
                <img src="images/hiso.JPG" alt="Hiso" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="RoseMilk.php">Rose Milk</a>
                <img src="images/RoseMilk.jpg" alt="Rose Milk" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="SaffronMilk.php">Saffron Milk</a>
                <img src="images/SaffronMilk.png" alt="Saffron Milk" class="dish-image">
            </div>

            <div class="dish-container">
                <a href="GingerMilk.php">Ginger Milk</a>
                <img src="images/gingerMilk.png" alt="Ginger Milk" class="dish-image">
            </div>
        </div>

        <button onclick="window.location.href='Booking.php'">Book Your Course!</button>
    </section>
    
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
                    <a href="mailto:bzar.team.qa@gmail.com"><i class="fas fa-envelope"></i></a>
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


    <script src="js/Homepage.js"></script>

</body>
</html>
