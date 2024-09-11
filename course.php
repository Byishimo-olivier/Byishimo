<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Virtual Task Ltd.</title>
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
            max-width: 500px;
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

        .form-row {
            margin-bottom: 20px;
        }

        .form-row label {
            font-size: 16px;
            margin-right: 10px;
        }

        .form-row select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-row button {
            background-color: #020114;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            align-self: right;
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
    <h2>Course Selection</h2>
    <div class="form-row">
        <label for="faculty">Faculty:</label>
        <select id="faculty" onchange="updateDepartments()">
            <option value="">Select a faculty</option>
            <option value="theology">Theology</option>
            <option value="it">IT</option>
            <option value="education">Education</option>
        </select>
    </div>

    <div class="form-row">
        <label for="department">Department:</label>
        <select id="department" onchange="updateCourses()">
            <option value="">Select a department</option>
        </select>
    </div>

    <div class="form-row">
        <label for="course">Course:</label>
        <select id="course">
            <option value="">Select a course</option>
        </select>
    </div>

    <div class="form-row">
        <button type="button" onclick="redirectToCourseDetails()">OK</button>
    </div>
</div>

<footer>
    <p>&copy; 2024 Virtual Task. All Rights Reserved.</p>
</footer>

<script>
    const departments = {
        'it': ['Software Engineering', 'Information Management', 'Networking'],
        'education': ['Pedagogy', 'Curriculum Development', 'Educational Psychology'],
        'theology': ['Biblical Studies', 'Theological Ethics', 'Church History']
    };

    const courses = {
        'Software Engineering': ['Introduction to Software Engineering', 'Software Design', 'Software Testing'],
        'Information Management': ['Database Management', 'Information Systems', 'Data Analytics'],
        'Networking': ['Network Fundamentals', 'Network Security', 'Advanced Networking'],
        'Pedagogy': ['Teaching Methods', 'Classroom Management', 'Educational Assessment'],
        'Curriculum Development': ['Curriculum Design', 'Instructional Strategies', 'Evaluation and Assessment'],
        'Educational Psychology': ['Learning Theories', 'Cognitive Development', 'Behavioral Management'],
        'Biblical Studies': ['Old Testament Studies', 'New Testament Studies', 'Hermeneutics'],
        'Theological Ethics': ['Moral Theology', 'Ethical Decision Making', 'Christian Ethics'],
        'Church History': ['Early Church History', 'Medieval Church History', 'Modern Church History']
    };

    function updateDepartments() {
        const facultySelect = document.getElementById('faculty');
        const departmentSelect = document.getElementById('department');
        const selectedFaculty = facultySelect.value;

        departmentSelect.innerHTML = '<option value="">Select a department</option>';
        document.getElementById('course').innerHTML = '<option value="">Select a course</option>';

        if (selectedFaculty && departments[selectedFaculty]) {
            departments[selectedFaculty].forEach(department => {
                const option = document.createElement('option');
                option.value = department;
                option.textContent = department;
                departmentSelect.appendChild(option);
            });
        }
    }

    function updateCourses() {
        const departmentSelect = document.getElementById('department');
        const courseSelect = document.getElementById('course');
        const selectedDepartment = departmentSelect.value;

        courseSelect.innerHTML = '<option value="">Select a course</option>';

        if (selectedDepartment && courses[selectedDepartment]) {
            courses[selectedDepartment].forEach(course => {
                const option = document.createElement('option');
                option.value = course;
                option.textContent = course;
                courseSelect.appendChild(option);
            });
        }
    }

    function redirectToCourseDetails() {
        const courseSelect = document.getElementById('course');
        const selectedCourse = courseSelect.value;

        if (selectedCourse) {
            // Redirect to courseDetail.php with the selected course
            window.location.href = `courseDetail.php?course=${encodeURIComponent(selectedCourse)}`;
        } else {
            alert('Please select a course.');
        }
    }
</script>

</body>
</html>
