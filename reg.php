<?php
$servername = "localhost";
$username = "fairooz";
$password = "@bc_123";
$dbname = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Hash the password (for better security, consider using password_hash())
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if user already exists in registered_users table
    $stmt = $conn->prepare("SELECT * FROM registered_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        // Insert new user into the new_users table
        $stmt = $conn->prepare("INSERT INTO new_users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful! Please log in.');</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
        } else {
            echo "<script>alert('Error: Could not register. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Email already registered. Please log in.');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>
