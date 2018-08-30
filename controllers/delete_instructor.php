<?php 
	require_once('./connect.php');

$instructor_id = $_GET['id'];



	$sql_delete = "DELETE from instructors where id = $instructor_id";

	mysqli_query($conn, $sql_delete);

	header('location: ../instructors.php');


mysqli_close($conn);

 