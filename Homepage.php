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
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Homepage.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Home Page</title>
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

    
    <div id="container">
        <h1 id="heading">BZAR....a tale of heritage and flavour</h1>
        <h3 id="heading1">This platform dedicated to preserving and sharing Qatar’s rich culinary heritage.</h3>
        <a id = "about" href="About-Us.html">Read more</a>
    </div>
    
    <div class="headingmostviewedrecipes">
        <h2 style="font-size: 50px;">Latest Recipes</h2>
    </div>

    <div class="container">
       
    <div class="card">
            <div class="imgBx">
                <img src="images/shrimpSaloona.jpeg" alt="">           
        </div>
        <div class="content">
            <h2>Shrimp Salona</h2>
            <p>A delicious Shrimp stew served with rice or bread..</p>
            <a href="ShrimpSaloona.html" class="btn">Read More</a>

         </div>    
    </div>
        
    <div class="card">
            <div class="imgBx">
                <img src="images/machboosechicken.JPG" alt="">           
        </div>
        <div class="content">
            <h2>Chicken Machboose</h2>
            <p>This delicious dish includes rice with chicken.</p>
            <a href="Chicken-Machboose.html" class="btn">Read More</a>

         </div>    
    </div>

        <div class="card">
            <div class="imgBx">
                <img src="images/gaimatdebs.JPG" alt="">           
            </div>       
            <div class="content">
                <h2>Debs Lugaimat</h2>
                <p>This is a dessert in qatars cusine and it contains fried pastry with debs sauce.</p>
                <a href="DebsLugaimat.html" class="btn">Read More</a>
         </div>    
    </div>

    <div class="card">
        <div class="imgBx">
            <img src="images/SaffronMilk.png" alt="">           
        </div>       
        <div class="content">
            <h2>Saffron Milk</h2>
            <p>This is a warm soothing flavors of traditional Qatari Saffron Milk.</p>
            <a href="SaffronMilk.html" class="btn">Read More</a>
     </div> 
        </div>
</div>
     


<!------------Featured chefs section -------------->
<div class="headingmostviewedrecipes">
    <h2 style="font-size: 50px;">Featured Chefs</h2>
</div>

<div class="featured-chefs">
    <div class="chef-card">
        <div class="chef-icon">
            <a href="ChefLolwaBio.html">
                <img src="images/lolwa.png" alt="Chef Lolwa Icon">
            </a>
        </div>
        <h3 class="chef-name">Chef Lolwa Al-Faddalah</h3>
        <p class="chef-position">Head Chef</p>
    </div>

    <div class="chef-card">
        <div class="chef-icon">
            <a href="ChefNoorBio.html">
                <img src="images/noor.png" alt="Chef Noor Icon">
            </a>
        </div>
        <h3 class="chef-name">Chef Noor Mohammed</h3>
        <p class="chef-position">Pastry Chef</p>
    </div>

    <div class="chef-card">
        <div class="chef-icon">
            <a href="ChefGhalyaBio.html">
                <img src="images/ghalya.png" alt="Chef Ghalya Icon">
            </a>
        </div>
        <h3 class="chef-name">Chef Ghalya Al-Khuzaei</h3>
        <p class="chef-position">Sous Chef</p>
    </div>

    <div class="chef-card">
        <div class="chef-icon">
            <a href="ChefAljaziBio.html">
                <img src="images/Aljazi.png" alt="Chef Aljazi Icon">
            </a>
        </div>
        <h3 class="chef-name">Chef Aljazi Al-Marzouqi</h3>
        <p class="chef-position">Culinary Artist</p>
    </div>
</div>

    <div class="headingmostviewedrecipes">
        <h2 style="font-size: 50px;">Most popular dishes</h2>
    </div>

    <div class="container">
       
        <div class="card">
            <div class="imgBx">
                <img src="images/karak.JPG" alt="">           
        </div>
        <div class="content">
            <h2>Karak</h2>
            <p>A famous Qatari drink made with evaporated or caned milk mixed with tea</p>
            <a href="Karak.html" class="btn">Read More</a>

         </div>    
    </div>

        <div class="card">
            <div class="imgBx">
                <img src="images/rosemilk.JPG" alt="">           
            </div>       
            <div class="content">
                <h2>Rose Milk</h2>
                <p>A warm drink made with milk and rose syrup</p>
                <a href="RoseMilk.html" class="btn">Read More</a>
         </div>    
    </div>

    
        <div class="card">
        <div class="imgBx">
            <img src="images/Shakshouka.JPG" alt="">           
        </div>       
        <div class="content">
            <h2>Shakshuka</h2>
            <p>Shakshuka is a dish of eggs poached in tomato sauce, olive oil, peppers, onions and garlic, usually seasoned with cumin, paprika and chili pepper. Shakshuka is usaualy served in breakfast.</p>
            <a href="Shakshuka.html" class="btn">Read More</a>
            </div> 
        </div>
        
            
        <div class="card">
                <div class="imgBx">
                <img src="images/Khanfaroosh.JPG" alt="">           
                </div>       
                <div class="content">
                <h2>Khanfarosh</h2>
                <p>This is a famouse dessert, which is a mini saffron cake..</p>
                <a href="Khanfaroosh.html" class="btn">Read More</a>
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

<script src="js/Homepage.js"></script>

</body>
</html>
