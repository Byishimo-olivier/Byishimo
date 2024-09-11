<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details - Virtual Task Ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8fadc7;
            background-size: cover;
            margin: 0;
            padding: 0;
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

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .course-info {
            margin-bottom: 30px;
        }

        .course-info h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .course-info p {
            font-size: 16px;
            margin: 5px 0;
        }

        .form-row {
            margin-bottom: 20px;
        }

        .form-row h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .form-row textarea {
            width: 60%;
            height: 70px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .form-row input[type="file"] {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .form-row button {
            background-color: #020114;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-row button:hover {
            background-color: blue;
            color: #020114;
            border: 2px solid #020114;
        }

        .quizzes {
            margin-top: 20px;
        }

        .quiz-item {
            margin-bottom: 10px;
        }

        .quiz-item a {
            color: #020114;
            text-decoration: none;
            font-size: 16px;
        }

        .quiz-item a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #020114;
            color: white;
            text-align: center;
            padding: 40px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
<nav>
    <div class="title">Virtual Task Ltd.</div>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>
</nav>

<div class="container">
    <h2>Course Details</h2>

    <?php if ($selectedCourse): ?>
        <div class="course-info">
            <h3><?php echo htmlspecialchars($selectedCourse['title']); ?></h3>
            <p><?php echo htmlspecialchars($selectedCourse['description']); ?></p>
            <p>Instructor: <?php echo htmlspecialchars($selectedCourse['instructor']); ?></p>
        </div>

        <div class="form-row">
            <h3>Add Comment</h3>
            <textarea id="comment" placeholder="Enter your comment"></textarea>
            <button type="button" onclick="submitComment()">Submit Comment</button>
        </div>

        <div class="form-row">
            <h3>Submit Assignment</h3>
            <input type="file" id="assignment" accept=".pdf,.doc,.docx">
            <button type="button" onclick="submitAssignment()">Submit Assignment</button>
        </div>

        <div class="quizzes">
            <h3>Available Quizzes</h3>
            <!-- Example quizzes (you would dynamically generate this list) -->
            <div class="quiz-item">
                <a href="quiz1.pdf" target="_blank">Quiz 1: Introduction to <?php echo htmlspecialchars($selectedCourse['title']); ?></a>
            </div>
            <div class="quiz-item">
                <a href="quiz2.pdf" target="_blank">Quiz 2: Advanced Topics in <?php echo htmlspecialchars($selectedCourse['title']); ?></a>
            </div>
        </div>
    <?php else: ?>
        <p>No course details available.</p>
    <?php endif; ?>
</div>

<footer>
    <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
</footer>

<script>
    function submitComment() {
        const comment = document.getElementById('comment').value;
        if (comment.trim()) {
            alert('Comment submitted successfully!');
            // Handle comment submission (e.g., send to server)
        } else {
            alert('Please enter a comment.');
        }
    }

    function submitAssignment() {
        const assignment = document.getElementById('assignment').files[0];
        if (assignment) {
            alert('Assignment submitted successfully!');
            // Handle assignment submission (e.g., send to server)
        } else {
            alert('Please upload an assignment.');
        }
    }
</script>

</body>
</html>
