<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "subscriptions");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely and validate
$full_name = trim(htmlspecialchars($_POST['name']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$address = trim(htmlspecialchars($_POST['address']));
$card_name = trim(htmlspecialchars($_POST['cardName']));
$card_number = trim($_POST['cardNum']);
$exp_month = trim($_POST['expMonth']);
$exp_year = trim($_POST['expYear']);
$plan = $_POST['plan'];  // Assuming you are passing the plan choice from the form

// Validation
if (empty($full_name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($address) || empty($card_name) || empty($card_number) || empty($exp_month) || empty($exp_year)) {
    echo "<script>alert('Please fill in all required fields correctly.'); window.history.back();</script>";
    exit();
}

// Store only the last 4 digits of the card number
$card_last4 = substr($card_number, -4);

// Prepare statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO payments (full_name, email, address, card_name, card_last4, exp_month, exp_year, plan) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $full_name, $email, $address, $card_name, $card_last4, $exp_month, $exp_year, $plan);

// Execute the query
if ($stmt->execute()) {
    // Redirect to success page with plan information
    echo "<script>window.location.href='subscriptionSuccess.html?plan=" . urlencode($plan) . "';</script>";
} else {
    // Error handling - show alert and log error to a file
    echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
    // Optionally log errors to a file (useful for debugging)
    error_log("Payment processing error: " . $stmt->error, 3, "error_log.txt");
}

// Close connection
$stmt->close();
$conn->close();
?>
