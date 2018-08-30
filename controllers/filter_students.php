<?php 
	require_once('./connect.php');

$course_id = $_GET['course'];


var_dump($course_id);

	$sql = "SELECT c.id, s.first_name as firstname, s.last_name as lastname, s.date_of_birth as dob FROM students_courses c JOIN students s ON (c.students_id = s.id)";
	mysqli_query($conn, $sql);
	

	// header('location: ../enrollment.php');


	// mysqli_close($conn);

 ?>