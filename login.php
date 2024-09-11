<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background: url('img/school_iStock-1358014313.jpg') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    nav {
        position: flex;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #020114;
        padding: 20px 40px;
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

    .login-container {
        background-color: rgba(43, 32, 23, 0.8); /* Transparent background */
        color: white;
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        height: 320px;
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

    input[type="text"], input[type="password"] {
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

    .signup-link {
        margin-top: 20px;
    }

    .signup-link p {
        margin: 0;
    }

    .signup-link a {
        color: white;
        text-decoration: none;
    }

    .signup-link a:hover {
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

    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit">Login</button>
            </div>
            <div id="error-message"></div>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
