<?php
include 'conf.php';
$response = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addCourse'])) {
        // Add Course
        $title = $_POST['courseTitle'];
        $description = $_POST['courseDescription'];
        $instructor = $_POST['courseInstructor'];

        $query = "INSERT INTO courses (title, description, instructor) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $title, $description, $instructor);
        $stmt->execute();
    }

    if (isset($_POST['removeCourse'])) {
        // Remove Course
        $courseId = $_POST['courseId'];
        $query = "DELETE FROM courses WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $courseId);
        $stmt->execute();
    }

    if (isset($_POST['addQuiz'])) {
        // Add Quiz
        $courseId = $_POST['quizCourseId'];
        $filePath = $_FILES['quizFile']['name'];
        $targetPath = 'uploads/quizzes/' . basename($filePath);

        move_uploaded_file($_FILES['quizFile']['tmp_name'], $targetPath);

        $query = "INSERT INTO quizzes (course_id, file_path) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("is", $courseId, $targetPath);
        $stmt->execute();
    }

    if (isset($_POST['removeQuiz'])) {
        // Remove Quiz
        $quizId = $_POST['quizId'];
        $query = "DELETE FROM quizzes WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $quizId);
        $stmt->execute();
    }

    if (isset($_POST['addAssignment'])) {
        // Add Assignment
        $courseId = $_POST['assignmentCourseId'];
        $filePath = $_FILES['assignmentFile']['name'];
        $targetPath = 'uploads/assignments/' . basename($filePath);

        move_uploaded_file($_FILES['assignmentFile']['tmp_name'], $targetPath);

        $query = "INSERT INTO assignments (course_id, file_path) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("is", $courseId, $targetPath);
        $stmt->execute();
    }

    if (isset($_POST['removeAssignment'])) {
        // Remove Assignment
        $assignmentId = $_POST['assignmentId'];
        $query = "DELETE FROM assignments WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $assignmentId);
        $stmt->execute();
    }

    // Redirect or show success message
    header('Location: admin.php');
    exit();
}
?>
