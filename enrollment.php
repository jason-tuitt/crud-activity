<?php  
	require_once('controllers/connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Wanbol U</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<h1>Wanbol U - LIST OF COURSES AND STUDENTS</h1>
	<form action="./?=" method="GET">
	<?php 
		$sql = "SELECT * from courses ORDER BY name";
		$results = mysqli_query($conn, $sql);
		echo '<select name = course>';
		while($row = mysqli_fetch_assoc($results)) {
			echo '<option value = "' . $row['id'] .'">' . $row['name'] . '</option>';
		};
		echo '</select>';
	?>
	<button type="submit">SEARCH</button>
	</form>

	<?php 
	$sql = "SELECT c.id, s.first_name as firstname, s.last_name as lastname, s.date_of_birth as dob, z.name as coursename FROM students_courses c JOIN students s ON (c.students_id = s.id) where ";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {
		echo '<table>';
		echo '<tr>';
	?>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date of Birth</th>

	<?php
		echo '</tr>';
		while($row = mysqli_fetch_assoc($result)) {
	 ?>
	 	<tr>
	 	<td><?php echo $row['first_name'] ?></td>
	 	<td><?php echo($row['last_name'])?></td>
	 	<td><?php echo($row['date_of_birth'])?></td>

		</tr>
		<?php 
		} 
		echo '</table>';
	} 

	else {
		echo 'No courses available';
	}

	?>

</body>
</html>
