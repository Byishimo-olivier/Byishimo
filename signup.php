<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background: url('images/1.jpg') no-repeat center center fixed;
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
    }

    nav ul li {
        display: inline;
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

    .signup-container {
        background-color: rgba(43, 32, 23, 0.8); /* Transparent background */
        color: white;
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin: 80px auto;
        text-align: center;
        flex-grow: 1;
    }

    h2 {
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 20px;
        text-align: left;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="password"], input[type="email"], input[type="date"], select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #094a02;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    #error-message {
        color: red;
        margin-top: 10px;
    }

    .login-link {
        margin-top: 20px;
    }

    .login-link p {
        margin: 0;
    }

    .login-link a {
        color: white;
        text-decoration: none;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    footer {
        background-color: #020114;
        color: white;
        text-align: center;
        padding: 40px 0; /* Increase padding for a larger footer */
        font-size: 16px; /* Increase font size for footer text */
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
            <li><a href="Home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <div class="signup-container">
        <h2>Sign Up</h2>
        <form id="signupForm" action="signup.php" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="input-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit">Sign Up</button>
            </div>
            <div id="error-message"></div>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
