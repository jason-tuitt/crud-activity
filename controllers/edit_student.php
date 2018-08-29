<?php 
	require_once('./connect.php');

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];

$date = strtotime($dob);
$newdate = date('Y/m/d', $date);

var_dump($id, $firstname, $lastname, $newdate);

	$sql_update = "UPDATE students SET first_name='$firstname', last_name='$lastname', date_of_birth='$newdate' WHERE id = $id";

		// $sql_query = "INSERT INTO students(first_name, last_name, date_of_birth) values ('$firstname', '$lastname', '$newdate')";

	mysqli_query($conn, $sql_update);
	

	header('location: ../students.php');


	mysqli_close($conn);

 ?>