<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Virtual Task Ltd.</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: url('images/about-bg.webp') no-repeat center center fixed;
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

    .content {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background-color: white;
    }

    .image-section {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px;
    }

    .image-section img {
        max-width: 100%;
        height: auto;
        border-radius: 20px;
    }

    .text-section {
        flex: 2;
        padding: 0 40px;
    }

    .text-section h1 {
        font-size: 48px;
        margin-bottom: 40px;
        text-align: center;
    }

    .section {
        margin-bottom: 50px;
        text-align: left;
    }

    .section h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .section p {
        font-size: 18px;
        line-height: 1.6;
    }

    .explore-button-wrapper {
        display: flex;
        justify-content: flex-end; /* Aligns the button to the right */
    }

    .explore-button {
        background-color: #0288d1;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        text-transform: uppercase;
        text-align: center;
    }

    .explore-button:hover {
        background-color: #0277bd;
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

    <div class="content">
        <div class="image-section">
            <img src="images/GettyImages-170126264.jpg" alt="About Us Image">
        </div>
        <div class="text-section">
            <h1>About Us</h1>

            <div class="section">
                <h2>Our Mission</h2>
                <p>To deliver innovative solutions and high-quality services that empower our clients to achieve their goals and exceed expectations. We strive to be a trusted partner, providing exceptional value through our expertise and personalized service.</p>
            </div>

            <div class="section">
                <h2>Our Vision</h2>
                <p>To be a global leader in the industry, recognized for our commitment to excellence, integrity, and innovation. We envision a future where our solutions drive success and create lasting impact for our clients and communities.</p>
            </div>

            <div class="explore-button-wrapper">
                <button class="explore-button" onclick="location.href='home.php'">Explore</button>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
    </footer>
</body>
</html>
