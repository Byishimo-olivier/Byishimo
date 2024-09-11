<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Virtual Task Ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    background: url('images/school_iStock-1358014313.jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #020114;
    padding: 40px 70px;
}

nav .title {
    color: #fff;
    font-size: 24px;
    font-weight: bold;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

nav ul li a:hover {
    text-decoration: underline;
}

.hero {
    text-align: center;
    padding: 50px 20px;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
}

.hero h1 {
    font-size: 50px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.contact-section {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 50px auto;
    padding: 50px;
    background-color: rgba(43, 32, 23, 0.8);
    border-radius: 10px;
    color: #fff;
}

.contact-info {
        flex: 1;
        padding-right: 20px; /* Space between info and form */
    }
    .contact-info p {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .contact-info i {
        margin-right: 10px;
        font-size: 20px; /* Adjust icon size */
    }

.contact-form {
    flex: 2;
    padding: 20px;
    background-color: rgba(43, 32, 23, 0.8);
    border-radius: 10px;
}

.contact-form h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form .form-row {
    display: flex;
    margin-bottom: 14px;
}

.contact-form .form-row label {
    flex: 1;
    font-size: 16px;
}

.contact-form .form-row input, 
.contact-form .form-row textarea {
    flex: 2;
    padding: 8px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form textarea {
    height: 80px;
    resize: vertical;
}

.contact-form button {
    background-color: #020114;
    color: #fff;
    border: none;
    padding: 15px 25px;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    margin-top: 20px;
    align-self: flex-end; /* Align to the right */
}

.contact-form button:hover {
    background-color: #fff;
    color: #020114;
    border: 2px solid #020114;
}

footer {
    background-color: #020114;
    color: white;
    text-align: center;
    padding: 40px 0;
    font-size: 16px;
}

footer p {
    margin: 0;
}


    </style>
</head>
<body>
<nav>
    <div class="title">Virtual Task Ltd.</div>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="Service.php">Services</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>
</nav>

<div class="hero">
    <h1>Contact Us</h1>
    <p>We would love to hear from you! Please fill out the form below and we will get back to you as soon as possible.</p>
</div>

<<div class="contact-section">
    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><i class="fas fa-map-marker-alt"></i><strong>Address:</strong> 495st, Apade Street, Kicukiro, Kigali City, Rwanda</p>
        <p><i class="fas fa-phone-alt"></i><strong>Phone:</strong> (+250) 783-227-490</p>
        <p><i class="fas fa-envelope"></i><strong>Email:</strong> info@virtualtask.com</p>
    </div>

    <div class="contact-form">
        <h2>Contact Form</h2>
        <form action="contact.php" method="post">
            <div class="form-row">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-row">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-row">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-row">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>
<footer>
    <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
</footer>
</body>
</html>