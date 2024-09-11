<?php
// Database connection
include 'conf.php';
$response = '';

// Initialize variables
$first_name = $last_name = $email = $phone = $dob = $gender = $password = "";
$errors = [];

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $first_name = $conn->real_escape_string(trim($_POST["first_name"]));
    $last_name = $conn->real_escape_string(trim($_POST["last_name"]));
    $email = $conn->real_escape_string(trim($_POST["email"]));
    $phone = $conn->real_escape_string(trim($_POST["phone"]));
    $dob = $conn->real_escape_string(trim($_POST["dob"]));
    $gender = $conn->real_escape_string(trim($_POST["gender"]));
    $password = $conn->real_escape_string(trim($_POST["password"]));
    
    // Password hashing
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
    // Basic validation
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($dob) || empty($gender) || empty($password)) {
        $errors[] = "All fields are required.";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    if (strlen($phone) < 10) {
        $errors[] = "Phone number must be at least 10 digits.";
    }
    
    // Check if email already exists
    $email_check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($email_check->num_rows > 0) {
        $errors[] = "Email is already registered.";
    }
    
    // If no errors, insert data into the database
    if (empty($errors)) {
        $sql = "INSERT INTO users (first_name, last_name, email, phone, dob, gender, password) VALUES ('$first_name', '$last_name', '$email', '$phone', '$dob', '$gender', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            // Redirect to login page or another page
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Display errors if any
    if (!empty($errors)) {
        echo '<div id="error-message">';
        foreach ($errors as $error) {
            echo '<p>' . htmlspecialchars($error) . '</p>';
        }
        echo '</div>';
    }
}

// Close connection
$conn->close();
?>
