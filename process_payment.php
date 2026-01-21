<?php
// Database connection (update to connect to 'subscriptions' database)
$conn = new mysqli("localhost", "root", "", "subscriptions");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$full_name = trim(htmlspecialchars($_POST['name']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$address = trim(htmlspecialchars($_POST['address']));
$plan = trim(htmlspecialchars($_POST['plan'])); // New field: subscription plan
$card_name = trim(htmlspecialchars($_POST['cardName']));
$card_number = trim($_POST['cardNum']);
$exp_month = trim($_POST['expMonth']);
$exp_year = trim($_POST['expYear']);
$cvv = trim($_POST['cvv']); // New field: CVV
$payment_status = "pending"; // Default payment status 

// Prepare statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO payments (full_name, email, address, plan, card_name, card_number, exp_month, exp_year, cvv, payment_status, created_at) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

// Bind parameters
$stmt->bind_param("ssssssssss", $full_name, $email, $address, $plan, $card_name, $card_number, $exp_month, $exp_year, $cvv, $payment_status);

// Execute the query
if ($stmt->execute()) {
    echo "<script>alert('Payment Successful!'); window.location.href='paymentSuccess.html';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
}

// Debugging Check if the data was inserted successfully
if ($stmt->execute()) {
    echo "Data inserted successfully!<br>";
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
