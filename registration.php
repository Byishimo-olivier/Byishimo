<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - Virtual Task Ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #8fadc7;
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
    background-color: #041866;
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

.registration-form {
    max-width: 1300px; /* Adjust width */
    margin: 50px auto;
    padding: 90px;
    background-color: white;
    border-radius: 8px;
    color: black;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow to mimic paper */
    border: 1px solid #ccc; /* Add border */
}

.registration-form h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.registration-form form {
    display: flex;
    flex-direction: column;
}

.registration-form .form-row {
    display: flex;
    margin-bottom: 14px;
}

.registration-form .form-row label {
    flex: 1;
    font-size: 14px;
}

.registration-form .form-row input, 
.registration-form .form-row select, 
.registration-form .form-row textarea {
    flex: 2;
    padding: 8px;
    border: 1px solid #ccc; /* Border to make fields visible */
    border-radius: 5px;
    font-size: 16px;
}

.registration-form textarea {
    height: 20px; /* Increased height for address text area */
    resize: vertical;
}

.registration-form input[type="file"] {
    padding: 0;
    font-size: 16px;
}

.registration-form button {
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

.registration-form button:hover {
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
    <h1>Student Registration</h1>
   
</div>

<div class="registration-form">
    <h2>Registration Form</h2>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>
        </div>

        <div class="form-row">
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>
        </div>

        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-row">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-row">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-row">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-row">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>

        <div class="form-row">
            <label for="doc1"> Upload Transcript </label>
            <input type="file" id="doc1" name="doc1" accept=".pdf,.doc,.docx,.jpg,.png" required>
        </div>

        <div class="form-row">
            <label for="doc2"> Upload deploma </label>
            <input type="file" id="doc2" name="doc2" accept=".pdf,.doc,.docx,.jpg,.png" required>
        </div>

        <div class="form-row">
            <label for="doc3">Upload Bank slip </label>
            <input type="file" id="doc3" name="doc3" accept=".pdf,.doc,.docx,.jpg,.png" required>
        </div>

        <button type="submit">Register</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
</footer>
</body>
</html>
