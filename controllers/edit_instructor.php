<?php 
	require_once('./connect.php');

$instructor = $_POST['instructor'];
$id = $_POST['id'];



	$sql_update = "UPDATE instructors SET name='$instructor' WHERE id = $id";
	mysqli_query($conn, $sql_update);
	

	header('location: ../instructors.php');


	// mysqli_close($conn);

 ?>