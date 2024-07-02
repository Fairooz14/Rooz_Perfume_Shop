<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userlogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product information from the GET parameters
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];

// Insert the product into the cart table
$insertQuery = "INSERT INTO cart (product_name, product_price) VALUES (?, ?)";

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare($insertQuery);
$stmt->bind_param("ss", $productName, $productPrice);

if ($stmt->execute()) {
    echo "Product added to cart successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
