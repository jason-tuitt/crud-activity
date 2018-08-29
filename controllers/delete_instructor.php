<?php 
	require_once('./connect.php');

$instructor_id = $_GET['id'];


echo(gettype( $course_id));
	$sql_delete = "DELETE from instructors where id = $instructor_id";
	// var_dump($sql_delete);
	mysqli_query($conn, $sql_delete);

	header('location: ../instructors.php');


mysqli_close($conn);

 