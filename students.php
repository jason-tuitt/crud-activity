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
	<h1>Wanbol U - Students</h1>
	<a href="./add_student.php"><button>ADD NEW STUDENT</button></a>
	<?php 
	$sql = 'SELECT * FROM students';

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {
		echo '<table>';
		echo '<tr>';
	?>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date of Birth</th>
		<th>Edit/Delete</th>

	<?php
		echo '</tr>';
		while($row = mysqli_fetch_assoc($result)) {
	 ?>
	 	<tr>
	 	<td><?php echo $row['first_name'] ?></td>
	 	<td><?php echo($row['last_name'])?></td>
	 	<td><?php echo($row['date_of_birth'])?></td>

	 	<td>
	 		<?php echo'<a href="./edit_student.php?id='. $row['id'] . '&firstname=' . $row['first_name'] . '&lastname=' . $row['last_name'] . '&dob=' . $row['date_of_birth'] .'"><button>EDIT</button></a>' ?>
	 		
	 		<?php echo'<a href="./controllers/delete_student.php?id='. $row['id'] .'"><button>DELETE</button></a>' ?>
	 	</td>
		</tr>
		<?php 
		} 
		echo '</table>';
	} 

	else {
		echo 'No songs available';
	}

	?>

</body>
</html>
