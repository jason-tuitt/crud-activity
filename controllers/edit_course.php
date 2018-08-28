<?php 
	require_once('./connect.php');

$course = $_POST['newCourse'];
$instructor_id = $_POST['instructor'];
$course_id = $_POST['course_id'];


var_dump($course, $instructor_id, $course_id);

	$sql_update = "UPDATE courses SET name='$course', instructors_id=$instructor_id WHERE id = $course_id";
	mysqli_query($conn, $sql_update);


	header('location: ../courses.php');

 ?>