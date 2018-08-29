<?php 
	require_once('./connect.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];

$date = strtotime($dob);
$newdate = date('Y/m/d', $date);
// $instructor_id = $_POST['instructor'];

// var_dump($dob);
// echo '<br>';
// var_dump($newdate);


	$sql_query = "INSERT INTO students(first_name, last_name, date_of_birth) values ('$firstname', '$lastname', '$newdate')";

	if(mysqli_query($conn, $sql_query)) {
		header('location: ../students.php');
	} else {
		echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
		echo '<a href="../courses.php"><button>BACK TO COURSES</button></a>';
	}

	// if(mysqli_query($conn, $sql_query)) {
	// 	header('location: ../instructors.php');
	// } else {
	// 	echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
	// 	echo '<a href="../courses.php"><button>BACK TO COURSES</button></a>';
	// }	

	mysqli_close($conn);

 