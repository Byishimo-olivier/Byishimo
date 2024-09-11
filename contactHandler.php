<?php
include 'conf.php';

$reponse = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Create the email content
    $to = "info@virtualtask.com"; // Replace with your email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $emailBody = "
    <html>
    <head>
        <title>Contact Form Submission</title>
    </head>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
