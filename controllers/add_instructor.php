<?php 
	require_once('./connect.php');

$course = $_POST['course'];
// $instructor_id = $_POST['instructor'];

	
	$sql_query = "INSERT INTO instructors(name) values ('$course')";

	if(mysqli_query($conn, $sql_query)) {
		header('location: ../instructors.php');
	} else {
		echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
		echo '<a href="../courses.php"><button>BACK TO COURSES</button></a>';
	}	

	mysqli_close($conn);

 