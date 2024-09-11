<?php
include 'conf.php'; // Include your configuration file

// Initialize variables
$response = '';
$fees = [];

// Fetch financial information from the database
$query = "SELECT * FROM fees";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fees[$row['fee_type']] = $row['amount'];
    }
} else {
    $response = "No financial information available.";
}

$conn->close();
?>
