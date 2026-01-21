<?php
session_start(); // Start or resume the session

ini_set('display_errors', 1); // Enable error display for debugging
error_reporting(E_ALL); // Report all types of errors

// Database connection parameters
$servername = "sqlXX.epizy.com"; // Database server address
$username = "if0_38876487"; // InfinityFree account database MySQL username
$password = "Bzar2028"; 
$dbname = "if0_38876487_login_signup_db"; // Name of the database to connect to

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for any connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Terminate script with error message
}

// Initialize an empty variable for error messages
$error_message = "";

// Process the form if it has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {
        // Registration logic for new users
        $username = $_POST['username']; // Get username from form
        $email = $_POST['email']; // Get email from form
        $password = $_POST['password']; // Get password from form

        // Hash the password to securely store it in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to check if the email already exists
        $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $sql->bind_param("s", $email); // Bind the email parameter
        $sql->execute(); // Execute the query
        $result = $sql->get_result(); // Get the result set

        if ($result->num_rows > 0) {
            $error_message = "Email is already registered!"; // Set error if email exists
        } else {
            // Insert the new user into the database since email is unique
            $sql = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $sql->bind_param("sss", $username, $email, $hashed_password); // Bind user data
            if ($sql->execute()) {
                //  Get the newly inserted user's ID
                $user_id = $conn->insert_id;
                
                // Store user session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;

                // Redirect to homepage
                header("Location: Homepage.php");
                exit(); // Stop further script execution
            } else {
                $error_message = "Error: " . $sql->error; // Set error message if insert fails
            }
        }

        $sql->close(); // Close the SQL statement

    } elseif (isset($_POST['login'])) {
        // Login logic for existing users
        $email = $_POST['email']; // Get email from form
        $password = $_POST['password']; // Get password from form

        // Prepare SQL statement to check if the user exists
        $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $sql->bind_param("s", $email); // Bind the email parameter
        $sql->execute(); // Execute the query
        $result = $sql->get_result(); // Get the result set

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc(); // Fetch user details
            // Verify the password provided by the user
            if (password_verify($password, $user['password'])) {
                //  Store user ID and username in session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                //  Redirect to homepage
                header("Location: Homepage.php");
                exit(); // Stop further script execution
            } else {
                $error_message = "Invalid password!"; // Set error for incorrect password
            }
        } else {
            $error_message = "No user found with this email!"; // Set error if email not found
        }

        $sql->close(); // Close the SQL statement
    }
}

$conn->close(); // Close the database connection

 // Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']) && isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/LoginandSignup.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Login & Registration Form</title>

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
    <div class="image-container">
      <img src="images/logo.png" alt="Background Image"> <!-- Logo image -->
    </div>
    <div class="wrapper">
      <!-- Login Form -->
      <div class="form-wrapper sign-in ">
        <form action="LoginandSignup.php" method="POST"> <!-- Form action URL -->
          <h2>Login</h2>
          <?php if (!empty($error_message)) { echo "<p class='error'>$error_message</p>"; } ?> <!-- Display error messages -->
          <div class="input-group">
            <input type="email" name="email" required> <!-- Email input field -->
            <label>Email</label>
          </div>
          <div class="input-group">
            <input type="password" name="password" required> <!-- Password input field -->
            <label>Password</label>
          </div>
          <div class="remember">
            <label><input type="checkbox" name="remember"> Remember me</label> <!-- Remember me option -->
          </div>
          <button type="submit" name="login" value="login">Login</button> <!-- Login button -->
          <div class="signUp-link">
            <p> Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p> <!-- Link to signup -->
          </div>
        </form>
      </div>

      <!-- Signup Form -->
      <div class="form-wrapper sign-up active">
        <form action="LoginandSignup.php" method="POST"> <!-- Form action URL -->
          <h2>Sign Up</h2>
          <?php if (!empty($error_message)) { echo "<p class='error'>$error_message</p>"; } ?> <!-- Display error messages -->
          <div class="input-group">
            <input type="text" name="username" required> <!-- Username input field -->
            <label>Username</label>
          </div>
          <div class="input-group">
            <input type="email" name="email" required> <!-- Email input field for signup -->
            <label>Email</label>
          </div>
          <div class="input-group">
            <input type="password" name="password" required> <!-- Password input field for signup -->
            <label>Password</label>
          </div>
          <div class="remember">
              <label><input type="checkbox" name="terms" required> I agree to the <a href="terms.html" target="_blank">Terms and Conditions</a> and <a href="privacy.html" target="_blank">Privacy Policy</a></label>
            </div>

          <button type="submit" name="signup" value="signup">Sign Up</button> <!-- Signup button -->
          <div class="signUp-link">
            <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p> <!-- Link to login -->
          </div>
        </form>
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


  <script src="js/LoginandSignup.js"></script> 
</body>
</html>