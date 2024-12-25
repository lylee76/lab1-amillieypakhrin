<?php
$mysqli = new mysqli("localhost", "root", "", "school_db");

// CRUD for Courses
if (isset($_POST['create_course'])) {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];
    $mysqli->query("INSERT INTO courses (title, duration, status, created_at) VALUES ('$title', '$duration', '$status', NOW())");
}

// CRUD for Students
if (isset($_POST['create_student'])) {
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $fee = $_POST['fee'];
    $rollno = $_POST['rollno'];
    $mysqli->query("INSERT INTO students (name, course_id, fee, rollno, created_at) VALUES ('$name', '$course_id', '$fee', '$rollno', NOW())");
}

// Fetch Records
$courses = $mysqli->query("SELECT * FROM courses");
$students = $mysqli->query("SELECT * FROM students");
?>

<h3>Courses</h3>
<form method="POST">
    Title: <input type="text" name="title"><br>
    Duration: <input type="text" name="duration"><br>
    Status: <input type="text" name="status"><br>
    <button type="submit" name="create_course">Add Course</button>
</form>

<h3>Students</h3>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Course ID: <input type="text" name="course_id"><br>
    Fee: <input type="text" name="fee"><br>
    Roll No: <input type="text" name="rollno"><br>
    <button type="submit" name="create_student">Add Student</button>
</form>
