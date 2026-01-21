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
    <title>Recipes</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/Recipes.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

<div class="container">
    <div class="card">
        <div class="imgBx">
            <img src="images/machboosechicken.JPG" alt="Chicken Machboose">
        </div>
        <h3>Chicken Machboose</h3>
        <div class="desc">This delicious dish includes rice with chicken.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Chicken-Machboose.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Fish Baryani -->
    <div class="card">
        <div class="imgBx">
            <img src="images/baryanifish.JPG" alt="Fish Baryani">
        </div>
        <h3>Fish Baryani</h3>
        <div class="desc">This dish includes white rice with yellow rice mixed together and fried fish on top.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Fish-Baryani.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Shrimp Baryani -->
    <div class="card">
        <div class="imgBx">
            <img src="images/baryanishrimp.JPG" alt="Shrimp Baryani">
        </div>
        <h3>Shrimp Baryani</h3>
        <div class="desc">This dish contains boiled shrimps with mixed yellow and white rice.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="ShrimpBaryani.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Lamb Baryani -->
    <div class="card">
        <div class="imgBx">
            <img src="images/baryani.JPG" alt="Lamb Baryani">
        </div>
        <h3>Lamb Baryani</h3>
        <div class="desc">This dish contains white rice with lamb on top, mixed with onions and chickpeas.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Lamb-Baryani.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Blaleet -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Blaleet.JPG" alt="Blaleet">
        </div>
        <h3>Blaleet</h3>
        <div class="desc">This dish is a popular Qatari breakfast, featuring thin sweet pasta with eggs on top.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Balaleet.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

        <!-- Khanfaroosh -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Khanfaroosh.JPG" alt="Blaleet">
        </div>
        <h3>Khanfaroosh</h3>
        <div class="desc">This is a famouse dessert, which is a mini saffron cake..</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Khanfaroosh.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Custard -->
    <div class="card">
        <div class="imgBx">
            <img src="images/castard.JPG" alt="Custard">
        </div>
        <h3>Custard</h3>
        <div class="desc">A Qatari dessert containing gelatin and vanilla mixed together.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Custard.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Karak -->
    <div class="card">
        <div class="imgBx">
            <img src="images/karak.JPG" alt="Karak">
        </div>
        <h3>Karak</h3>
        <div class="desc">A famous Qatari drink made with evaporated or caned milk mixed with tea.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Karak.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Lamb Saloona -->
    <div class="card">
        <div class="imgBx">
            <img src="images/lambsaloona.JPG" alt="Lamb Saloona">
        </div>
        <h3>Lamb Saloona</h3>
        <div class="desc">A delicious lamb stew served with rice or bread.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="LambSaloona.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
    <!-- Chicken Saloona -->
    <div class="card">
        <div class="imgBx">
            <img src="images/chickensaloona.JPG" alt="Chicken Saloona">
        </div>
        <h3>Chicken Saloona</h3>
        <div class="desc">A delicious Chicken stew served with rice or bread.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="ChickenSaloona.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
        <!-- Shrimp Saloona -->
    <div class="card">
        <div class="imgBx">
            <img src="images/shrimpSaloona.jpeg" alt="Shrimp Saloona">
        </div>
        <h3>Shrimp Saloona</h3>
        <div class="desc">A delicious Shrimp stew served with rice or bread.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="ShrimpSaloona.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Madrooba -->
    <div class="card">
        <div class="imgBx">
            <img src="images/madrooba.JPG" alt="Madrooba">
        </div>
        <h3>Madrooba</h3>
        <div class="desc">A smooth rice and chicken dish.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Madrooba.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Harees -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Harees.JPG" alt="Blaleet">
        </div>
        <h3>Harees</h3>
        <div class="desc">Harees consists of meat and unground or broken wheat. The mash contains a large wooden whisk with which the mash grains are crushed and beaten.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Harees.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Mahlibiyat Aish -->
    <div class="card">
        <div class="imgBx">
            <img src="images/mahlbiyataish.JPG" alt="Mahlibiyat Aish">
        </div>
        <h3>Mahlibiyat Aish</h3>
        <div class="desc">This is a dessert and it contains gelation with powdered milk</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="MahalabiaAish.php" class="cardbtn">View Recipe</a>
        </div>
    </div>    
    
    <!-- Maamoul -->
    <div class="card">
        <div class="imgBx">
            <img src="images/maamoul.png" alt="Maamoul">
        </div>
        <h3>Maamoul</h3>
        <div class="desc">A handmade Qatari dessert shortbread cookie pressed into a carved, wooden mold and stuffed with a variety of fillings such as date paste, pistachios and almonds</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Maamoul.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
        <!-- Nakhi -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Nakhi.png" alt="Nakhi">
        </div>
        <h3>Nakhi</h3>
        <div class="desc">A hearty stew made with mashed chickpeas, tahini, lemon, garlic, and olive oil.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Nakhi.php" class="cardbtn">View Recipe</a>
        </div>
        </div>       
    
            <!-- Bajilla -->
        <div class="card">
            <div class="imgBx">
                <img src="images/bajilla.png" alt="Nakhi">
            </div>
            <h3>Bajilla</h3>
            <div class="desc">A hearty stew made with Fava beans eaten warm on cold mornings.</div>
            <div class="content">
                <p>More details about the recipe...</p>
                <a href="Bajilla.php" class="cardbtn">View Recipe</a>
            </div>
        </div>

    <!-- Lamb Machboose -->
    <div class="card">
        <div class="imgBx">
            <img src="images/majboose.JPG" alt="Lamb Machboose">
        </div>
        <h3>Lamb Machboose</h3>
        <div class="desc">Qatari meat machboos is a popular and nutritious dish in Qatari cuisine, enriched with spices that enhance its flavor and offer health benefits.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Lamb-Machboose.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Muhammar -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Muhammar.JPG" alt="Mohammar Fish">
        </div>
        <h3>Muhammar </h3>
        <div class="desc">Muhammar is a traditional dish from Qatar. It is a sweet rice dish seasoned with spices and is usually eaten with fried or grilled fish. </div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Muhammar.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Red Tea -->
    <div class="card">
        <div class="imgBx">
            <img src="images/redtea.JPG" alt="Red Tea">
        </div>
        <h3>Red Tea</h3>
        <div class="desc">This is a warm drink that qatari people drink in any occasion, this drink contains water, suger and tea. </div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Read-tea.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Rose Milk -->
    <div class="card">
        <div class="imgBx">
            <img src="images/rosemilk.JPG" alt="Rose Milk">
        </div>
        <h3>Rose Milk</h3>
        <div class="desc">A warm drink made with milk and rose syrup.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="RoseMilk.php" class="cardbtn">View Recipe</a>
        </div>
    </div>   
    
    <!-- Ginger Milk -->
    <div class="card">
        <div class="imgBx">
            <img src="images/gingerMilk.png" alt="Ginger Milk">
        </div>
        <h3>Ginger Milk</h3>
        <div class="desc">This is a warm soothing flavors of traditional Qatari Ginger Milk.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="GingerMilk.php" class="cardbtn">View Recipe</a>
        </div>
    </div>    
    
    <!-- Saffron Milk -->
    <div class="card">
        <div class="imgBx">
            <img src="images/SaffronMilk.png" alt="Saffron Milk">
        </div>
        <h3>Saffron Milk</h3>
        <div class="desc">This is a warm soothing flavors of traditional Qatari Saffron Milk.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="SaffronMilk.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
    <!-- Thareed -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Thareed.JPG" alt="Cheese Samboosa">
        </div>
        <h3>Thareed</h3>
        <div class="desc">This dish contains meat soup that is soaked in bread, it's mainly eaten at lunch or dinner.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Thareed.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
    <!-- Cheese Samboosa -->
    <div class="card">
        <div class="imgBx">
            <img src="images/sambosa.JPG" alt="Cheese Samboosa">
        </div>
        <h3>Cheese Samboosa</h3>
        <div class="desc">A delicious appetizer with puff pastry and cheese filling.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Sambosa.php" class="cardbtn">View Recipe</a>
        </div>
    </div>

    <!-- Shakshuka -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Shakshouka.JPG" alt="Shakshuka">
        </div>
        <h3>Shakshuka</h3>
        <div class="desc">Shakshuka is a dish of eggs poached in tomato sauce, olive oil, peppers, onions and garlic, usually seasoned with cumin, paprika and chili pepper. Shakshuka is usaualy served in breakfast.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Shakshouka.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
    <!-- Hiso -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Hiso.jpg" alt="Hiso">
        </div>
        <h3>Hiso</h3>
        <div class="desc">A warm drink made with Hiso seeds, served around winter time to warm up your body.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Hiso.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
        <!-- Debs Lugaimat  -->
    <div class="card">
        <div class="imgBx">
            <img src="images/gaimatdebs.JPG" alt="Debs Lugaimat">
        </div>
        <h3>Debs Lugaimat</h3>
        <div class="desc">This is a dessert in qatars cusine and it contains fried pastry with debs sauce.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="DebsLugaimat.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
        <!-- Honey Lugaimat  -->
    <div class="card">
        <div class="imgBx">
            <img src="images/lugaimathoney.JPG" alt="Honey Lugaimat">
        </div>
        <h3>Honey Lugaimat</h3>
        <div class="desc">This is a dessert in qatars cusine and it contains fried pastry with honey sauce.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="HoneyLugaimat.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
        <!-- Regag  -->
    <div class="card">
        <div class="imgBx">
            <img src="images/Regag.png" alt="Regag">
        </div>
        <h3>Regag</h3>
        <div class="desc">Regag Bread is a Qatari thin and crispy crepe-like texture. This traditional bread is topped with egg, cheese, or honey.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Regag.php" class="cardbtn">View Recipe</a>
        </div>
    </div>
    
    
    
    <!-- Arabic Coffee -->
    <div class="card">
        <div class="imgBx">
            <img src="images/arabicCoffee.png" alt="Arabic Coffee">
        </div>
        <h3>Arabic Coffee</h3>
        <div class="desc">"Arabic coffee” is a popular drink that has been enjoyed for centuries throughout qatar's tradition. It is made from lightly roasted coffee beans, usually cardamom, and served hot in small cups.</div>
        <div class="content">
            <p>More details about the recipe...</p>
            <a href="Arabiccoffee.php" class="cardbtn">View Recipe</a>
        </div>
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

        <script src="js/Recipes.js"></script>
</body>
</html>
