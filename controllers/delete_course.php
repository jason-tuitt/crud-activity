<?php 
	require_once('./connect.php');

$course_id = $_GET['id'];
$course_id = (int)$course_id;


	$sql_delete = "DELETE from courses where id = $course_id";

	mysqli_query($conn, $sql_delete);


	header('location: ../courses.php');


mysqli_close($conn);

 