<?php
// Include database connection
include 'conf.php';
$response = '';

// Handle form submissions for adding/removing courses, quizzes, and assignments

// Add Course
if (isset($_POST['addCourse'])) {
    $title = $_POST['courseTitle'];
    $description = $_POST['courseDescription'];
    $instructor = $_POST['courseInstructor'];
    
    $query = "INSERT INTO courses (title, description, instructor) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $title, $description, $instructor);
    $stmt->execute();
    $stmt->close();
}

// Remove Course
if (isset($_POST['removeCourse'])) {
    $courseId = $_POST['courseId'];
    
    $query = "DELETE FROM courses WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $courseId);
    $stmt->execute();
    $stmt->close();
}

// Add Quiz
if (isset($_POST['addQuiz'])) {
    $courseId = $_POST['quizCourseId'];
    $quizFile = $_FILES['quizFile']['name'];
    $target = 'uploads/' . basename($quizFile);
    
    move_uploaded_file($_FILES['quizFile']['tmp_name'], $target);
    
    $query = "INSERT INTO quizzes (course_id, file_path) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('is', $courseId, $target);
    $stmt->execute();
    $stmt->close();
}

// Remove Quiz
if (isset($_POST['removeQuiz'])) {
    $quizId = $_POST['quizId'];
    
    $query = "SELECT file_path FROM quizzes WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $quizId);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();
    
    unlink($filePath);
    
    $query = "DELETE FROM quizzes WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $quizId);
    $stmt->execute();
    $stmt->close();
}

// Add Assignment
if (isset($_POST['addAssignment'])) {
    $courseId = $_POST['assignmentCourseId'];
    $assignmentFile = $_FILES['assignmentFile']['name'];
    $target = 'uploads/' . basename($assignmentFile);
    
    move_uploaded_file($_FILES['assignmentFile']['tmp_name'], $target);
    
    $query = "INSERT INTO assignments (course_id, file_path) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('is', $courseId, $target);
    $stmt->execute();
    $stmt->close();
}

// Remove Assignment
if (isset($_POST['removeAssignment'])) {
    $assignmentId = $_POST['assignmentId'];
    
    $query = "SELECT file_path FROM assignments WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $assignmentId);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();
    
    unlink($filePath);
    
    $query = "DELETE FROM assignments WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $assignmentId);
    $stmt->execute();
    $stmt->close();
}

// Fetch courses for dropdowns
$courses = [];
$query = "SELECT id, title FROM courses";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}
?>