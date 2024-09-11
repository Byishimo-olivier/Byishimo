<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Virtual Task Ltd.</title>
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
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
    }

    .hero h1 {
        font-size: 50px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 20px;
        max-width: 600px;
    }

    .sections {
        display: flex;
        justify-content: space-around;
        padding: 50px;
        background-color: rgba(43, 32, 23, 0.8);
    }

    .sections .section {
        width: 22%;
        text-align: center;
        color: white;
    }

    .sections .section h2 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .sections .section p {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .sections .section button {
        background-color: #0288d1;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .sections .section button:hover {
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="Service.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>

    <div class="hero">
        <div>
            <h1>Welcome to Virtual Task Ltd.</h1>
            <p>Your trusted partner for innovative solutions and quality services. We are committed to providing exceptional value to our clients through a combination of expertise and personalized service.</p>
        </div>
    </div>

    <div class="sections">
        <div class="section">
            <h2>Courses</h2>
            <p>The courses of undergraduate programme that can be taken at all.</p>
            <button onclick="location.href='course.php'">Learn More</button>
        </div>
        <div class="section">
            <h2>Registration</h2>
            <p>If you're interested and you meet the requirements, please register.</p>
            <button onclick="location.href='registration.php'">Register Now</button>
        </div>
        <div class="section">
            <h2>Finance</h2>
            <p>All financial information is explored here.</p>
            <button onclick="location.href='finance.php'">View Details</button>
        </div>
        <div class="section">
            <h2>Completion</h2>
            <p>If you've completed any course, view your report.</p>
            <button onclick="location.href='completion.php'">View Report</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
    </footer>
</body>
</html>
