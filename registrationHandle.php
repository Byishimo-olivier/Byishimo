<?php
include 'conf.php';

$response = '';
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the input data
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = htmlspecialchars($_POST['address']);

    // Handle file uploads
    $uploadDir = 'uploads/';
    $allowedFileTypes = ['pdf', 'doc', 'docx', 'jpg', 'png'];

    $doc1 = $_FILES['doc1'];
    $doc2 = $_FILES['doc2'];
    $doc3 = $_FILES['doc3'];

    // Function to handle file upload
    function uploadFile($file, $uploadDir, $allowedFileTypes) {
        $fileName = basename($file['name']);
        $targetFilePath = $uploadDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowedFileTypes)) {
            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                return $targetFilePath;
            } else {
                echo "Error uploading $fileName.<br>";
                return false;
            }
        } else {
            echo "$fileName is not an allowed file type.<br>";
            return false;
        }
    }

    // Upload files
    $doc1Path = uploadFile($doc1, $uploadDir, $allowedFileTypes);
    $doc2Path = uploadFile($doc2, $uploadDir, $allowedFileTypes);
    $doc3Path = uploadFile($doc3, $uploadDir, $allowedFileTypes);

    // Check if all files were uploaded successfully
    if ($doc1Path && $doc2Path && $doc3Path) {
        // Here, you would typically insert the data into a database
        // For example:
         $query = "INSERT INTO students (first_name, last_name, email, phone, dob, gender, address, transcript, diploma, bank_slip)
                  VALUES ('$firstName', '$lastName', '$email', '$phone', '$dob', '$gender', '$address', '$doc1Path', '$doc2Path', '$doc3Path')";
         $result = mysqli_query($conn, $query);

        // For now, let's just display the data as a confirmation
        echo "<h2>Registration Successful!</h2>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Date of Birth: $dob</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Transcript Uploaded: $doc1Path</p>";
        echo "<p>Diploma Uploaded: $doc2Path</p>";
        echo "<p>Bank Slip Uploaded: $doc3Path</p>";
    } else {
        echo "<h2>Registration Failed!</h2>";
        echo "<p>There was an error uploading your documents.</p>";
    }
}
?>
