<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Virtual Task Ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #020114;
            padding: 20px;
            color: #fff;
        }

        nav .title {
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-row {
            margin-bottom: 30px;
        }

        .form-row h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .form-row input, .form-row textarea, .form-row select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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

        footer {
            background-color: #020114;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<nav>
    <div class="title">Virtual Task Ltd. - Admin Panel</div>
</nav>

<div class="container">
    <h2>Manage Courses, Quizzes, and Assignments</h2>

    <!-- Add Course -->
    <div class="form-row">
        <h3>Add Course</h3>
        <form action="admin.php" method="post">
            <input type="text" name="courseTitle" placeholder="Course Title" required>
            <textarea name="courseDescription" placeholder="Course Description" required></textarea>
            <input type="text" name="courseInstructor" placeholder="Instructor Name" required>
            <button type="submit" name="addCourse">Add Course</button>
        </form>
    </div>

    <!-- Remove Course -->
    <div class="form-row">
        <h3>Remove Course</h3>
        <form action="admin.php" method="post">
            <select name="courseId" required>
                <option value="" disabled selected>Select a Course</option>
                <?php foreach ($courses as $course): ?>
                    <option value="<?php echo htmlspecialchars($course['id']); ?>"><?php echo htmlspecialchars($course['title']); ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="removeCourse">Remove Course</button>
        </form>
    </div>

    <!-- Add Quiz -->
    <div class="form-row">
        <h3>Add Quiz</h3>
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <select name="quizCourseId" required>
                <option value="" disabled selected>Select a Course</option>
                <?php foreach ($courses as $course): ?>
                    <option value="<?php echo htmlspecialchars($course['id']); ?>"><?php echo htmlspecialchars($course['title']); ?></option>
                <?php endforeach; ?>
            </select>
            <input type="file" name="quizFile" accept=".pdf,.doc,.docx" required>
            <button type="submit" name="addQuiz">Add Quiz</button>
        </form>
    </div>

    <!-- Remove Quiz -->
    <div class="form-row">
        <h3>Remove Quiz</h3>
        <form action="admin.php" method="post">
            <select name="quizId" required>
                <option value="" disabled selected>Select a Quiz</option>
                <?php
                // Fetch quizzes for dropdown
                $quizzes = [];
                $query = "SELECT id, file_path FROM quizzes";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    $quizzes[] = $row;
                }
                ?>
                <?php foreach ($quizzes as $quiz): ?>
                    <option value="<?php echo htmlspecialchars($quiz['id']); ?>"><?php echo htmlspecialchars(basename($quiz['file_path'])); ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="removeQuiz">Remove Quiz</button>
        </form>
    </div>

    <!-- Add Assignment -->
    <div class="form-row">
        <h3>Add Assignment</h3>
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <select name="assignmentCourseId" required>
                <option value="" disabled selected>Select a Course</option>
                <?php foreach ($courses as $course): ?>
                    <option value="<?php echo htmlspecialchars($course['id']); ?>"><?php echo htmlspecialchars($course['title']); ?></option>
                <?php endforeach; ?>
            </select>
            <input type="file" name="assignmentFile" accept=".pdf,.doc,.docx" required>
            <button type="submit" name="addAssignment">Add Assignment</button>
        </form>
    </div>

    <!-- Remove Assignment -->
    <div class="form-row">
        <h3>Remove Assignment</h3>
        <form action="admin.php" method="post">
            <select name="assignmentId" required>
                <option value="" disabled selected>Select an Assignment</option>
                <?php
                // Fetch assignments for dropdown
                $assignments = [];
                $query = "SELECT id, file_path FROM assignments";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    $assignments[] = $row;
                }
                ?>
                <?php foreach ($assignments as $assignment): ?>
                    <option value="<?php echo htmlspecialchars($assignment['id']); ?>"><?php echo htmlspecialchars(basename($assignment['file_path'])); ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="removeAssignment">Remove Assignment</button>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
</footer>

</body>
</html>