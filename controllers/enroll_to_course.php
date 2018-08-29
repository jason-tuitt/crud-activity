<?php 
	require_once('./connect.php');

$course = $_POST['course'];
$student = $_POST['student'];



	$sql_enroll = "INSERT INTO students_courses(courses_id, students_id) values ($course, $student)";

	mysqli_query($conn, $sql_enroll);


	// $sql_update = "UPDATE students SET first_name='$firstname', last_name='$lastname', date_of_birth='$newdate' WHERE id = $id";

		// $sql_query = "INSERT INTO students(first_name, last_name, date_of_birth) values ('$firstname', '$lastname', '$newdate')";

	// 
	
	header('location: ../enroll_to_course.php');

	mysqli_close($conn);

 ?>