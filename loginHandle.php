<?php
// Start session
session_start();

// Include database connection
$servername = "localhost"; // Change this to your server
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "virtualtask_db"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from the form
    $email = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare and bind
    $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    
    // Execute query
    $stmt->execute();
    
    // Bind result variables
    $stmt->bind_result($db_email, $db_password);

    if ($stmt->fetch()) {
        // Verify password
        if (password_verify($password, $db_password)) {
            // Password is correct, set session and redirect
            $_SESSION['email'] = $db_email;
            header("Location: home.php");
            exit();
        } else {
            // Invalid password
            $error_message = 'Invalid email or password.';
        }
    } else {
        // Invalid email
        $error_message = 'Invalid email or password.';
    }

    $stmt->close();
}

$conn->close();
?>
