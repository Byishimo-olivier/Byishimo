<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Virtual Task Ltd.</title>
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

    .services {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 50px 20px;
        background-color: rgba(43, 32, 23, 0.8);
    }

    .service {
        width: 30%;
        background-color: #fff;
        color: #333;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .service h2 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .service p {
        font-size: 16px;
        line-height: 1.6;
    }

    .values {
        padding: 20px;
        background-color: rgba(43, 32, 23, 0.8);
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .values .card {
        background-color: #fff;
        color: #333;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 700px;
        text-align: center;
    }

    .values .card h2 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .values .card p {
        font-size: 20px;
        line-height: 1.6;
    }

    .register-btn {
        background-color: #020114;
        color: #fff;
        border: none;
        padding: 15px 25px;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    .register-btn:hover {
        background-color: #fff;
        color: #020114;
        text-decoration: none;
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
            <li><a href="service.php">Services</a></li>
            <li><a href="contact.PHP">Contact Us</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1>University Services</h1>
        <p>Explore our comprehensive range of undergraduate programs offered in various departments including IT, Theology, and Education. Our services are designed to provide you with the best academic and personal growth opportunities.</p>
    </div>

    <div class="services">
        <div class="service">
            <h2>Department of IT</h2>
            <p>Our IT department offers cutting-edge undergraduate programs designed to equip students with the skills needed for the tech industry. Programs include Computer Science, Information Systems, and Cybersecurity, with hands-on experience and industry connections.</p>
        </div>
        <div class="service">
            <h2>Department of Theology</h2>
            <p>The Theology department provides a range of undergraduate courses focusing on religious studies, philosophy, and ethics. Our programs aim to deepen students' understanding of theological concepts and prepare them for careers in ministry, counseling, and more.</p>
        </div>
        <div class="service">
            <h2>Department of Education</h2>
            <p>Our Education department offers programs that prepare students for teaching careers and educational leadership roles. Courses cover curriculum development, educational psychology, and pedagogical strategies to ensure a comprehensive education experience.</p>
        </div>
    </div>

    <div class="values">
        <div class="card">
            <h2>Our Christian Values</h2>
            <p>As a Christian university, we are committed to nurturing the whole person—mind, body, and spirit. Our values are deeply rooted in Christian teachings, guiding us in our pursuit of academic excellence and personal growth. We uphold integrity, compassion, respect, and service, aiming to foster a supportive community where faith and learning go hand in hand. We strive to prepare our students to lead lives of purpose and make meaningful contributions to society.</p>
            <a href="registration.php" class="register-btn">Register</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
    </footer>
</body>
</html>
