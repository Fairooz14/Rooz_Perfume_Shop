<!-- -->
// Database configuration
//$servername = "localhost";
//$username = "root"; // default XAMPP MySQL username
//$password = "";     // default XAMPP MySQL password
//$dbname = "userlogin";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

// Function to sanitize input data
//function sanitize_input($data)
//{
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}

// Form submission
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $email = sanitize_input($_POST["email"]);
//    $password = sanitize_input($_POST["password"]);

    // Hash the password (for better security, consider using password_hash())
//    $hashed_password = md5($password); // You should use a more secure hashing method

    // Query to check user credentials
//    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
//    $result = $conn->query($sql);

//   if ($result->num_rows > 0) {
//        echo "Successful LogIn";
//        // You can redirect the user to a dashboard or another page here
//    } else {
//        // echo "Welcome To the shop";
<!-- //        echo "<script> alert('Welcome To the shop');</script>"; -->
<!-- //        echo "<script>setTimeout(function(){ window.location.href = 'shop.html'; }, 1000);</script>"; -->
//    }
//}

// Close connection
//$conn->close();
//

<?php
// Database configuration
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "userlogin";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);



// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Function to sanitize input data
// function sanitize_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// // Form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = sanitize_input($_POST["email"]);
//     $password = sanitize_input($_POST["password"]);

//     // Hash the password (for better security, consider using password_hash())
//     $hashed_password = md5($password); // You should use a more secure hashing method

//     // Use Prepared Statements to prevent SQL injection
//     $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
//     $stmt->bind_param("ss", $email, $hashed_password);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         // Redirect to dashboard or another page
//         header("Location: dashboard.php");

//         // Insert user data into another table (change 'user_data' to your actual table name)
//         $insertSql = "INSERT INTO users (email, password) VALUES (?, ?)";
//         $insertStmt = $conn->prepare($insertSql);
//         $insertStmt->bind_param("ss", $email, $hashed_password);
//         $insertStmt->execute();
//         $insertStmt->close();
//     } else {
//         // Login failed
//         echo "<script>alert('Welcome To the shop');</script>";
//         echo "<script>setTimeout(function(){ window.location.href = 'shop.html'; }, 1000);</script>";
//     }

//     $stmt->close();
// }

// // Close connection
// $conn->close();
// ?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "userlogin";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Function to sanitize input data
// function sanitize_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// // Form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = sanitize_input($_POST["email"]);
//     $password = sanitize_input($_POST["password"]);

//     // Check if user exists in the database
//     $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         // Fetch the user's data
//         $user = $result->fetch_assoc();
//         if (md5($password) == $user['password']) {
//             // Redirect to dashboard or another page
//             header("Location: dashboard.php");
//         } else {
//             // Login failed
//             echo "<script>alert('Invalid email or password');</script>";
//             echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
//         }
//     } else {
//         // User does not exist, insert new user
//         $hashed_password = md5($password); // You should use a more secure hashing method
//         $insertSql = "INSERT INTO users (email, password) VALUES (?, ?)";
//         $insertStmt = $conn->prepare($insertSql);
//         $insertStmt->bind_param("ss", $email, $hashed_password);
//         $insertStmt->execute();
//         $insertStmt->close();

//         echo "<script>alert('Account created successfully. Please log in.');</script>";
//         echo "<script>setTimeout(function(){ window.location.href = 'shop.html'; }, 1000);</script>";
//     }

//     $stmt->close();
// }

// // Close connection
// $conn->close();
// ?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "userlogin";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Function to sanitize input data
// function sanitize_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// // Form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = sanitize_input($_POST["email"]);
//     $password = sanitize_input($_POST["password"]);

//     // Use Prepared Statements to prevent SQL injection
//     $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row["password"])) {
//             // Redirect to shop
//             header("Location: shop.html");
//             exit();
//         } else {
//             echo "<script>alert('Incorrect password. Please try again.');</script>";
//             echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
//         }
//     } else {
//         echo "<script>alert('Email not registered. Please register first.');</script>";
//         echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
//     }

//     $stmt->close();
// }

// Close connection
// $conn->close();
// ?>

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
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Use Prepared Statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT password FROM registered_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Redirect to shop
            header("Location: shop.html");
            exit();
        } else {
            echo "<script>alert('Incorrect password. Please try again.');</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
        }
    } else {
        echo "<script>alert('Email not registered. Please register first.');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'home.html'; }, 1000);</script>";
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>


