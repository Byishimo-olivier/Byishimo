
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Information</title>
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

    .content-container {
        background-color: rgba(43, 32, 23, 0.8); /* Transparent background */
        color: white;
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        margin: 80px auto;
        text-align: center;
        flex-grow: 1;
    }

    h2 {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #094a02;
        color: white;
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
            <li><a href="finance.php">Finance</a></li> <!-- Link to the finance page -->
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>

    <div class="content-container">
        <h2>Finance Information</h2>
        
        <?php if ($response): ?>
            <p><?php echo htmlspecialchars($response); ?></p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Fee Type</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Registration Fee</td>
                        <td>50000 Rwf<?php echo htmlspecialchars($fees['Registration Fee']); ?></td>
                    </tr>
                    <tr>
                        <td>Tuition Fee</td>
                        <td>20,000 Rwf<?php echo htmlspecialchars($fees['Tuition Fee']); ?></td>
                    </tr>
                    <tr>
                        <td>Internet Fee</td>
                        <td>60, 000 Rwf<?php echo htmlspecialchars($fees['Internet Fee']); ?></td>
                    </tr>
                    <tr>
                        <td>Student Association Fee</td>
                        <td>10, 000 Rwf<?php echo htmlspecialchars($fees['Student Association Fee']); ?></td>
                    </tr>
                    <tr>
                        <td>Insurance Fee</td>
                        <td>10, 000 Rwf<?php echo htmlspecialchars($fees['Insurance Fee']); ?></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
    </footer>
</body>
</html>