<?php 
	require_once('./connect.php');

$course = $_POST['course'];
$instructor_id = $_POST['instructor'];


// var_dump($course);
// var_dump($instructor);


	
	$sql_query = "INSERT INTO courses(name, instructors_id) values ('$course', $instructor_id)";

	if(mysqli_query($conn, $sql_query)) {
		header('location: ../courses.php');
	} else {
		echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
		echo '<a href="../courses.php"><button>BACK TO COURSES</button></a>';
	}	


	mysqli_close($conn);
