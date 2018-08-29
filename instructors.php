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
	<h1>Wanbol U - Instructors</h1>

	<a href="./add_instructor.php"><button>ADD NEW INSTRUCTOR</button></a>

	<?php 
	$sql = 'SELECT * FROM instructors';

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {
		echo '<table>';
		echo '<tr>';
	?>
		<th>Instructor Name</th>
		<th>Edit/Delete</th>

	<?php
		echo '</tr>';
		while($row = mysqli_fetch_assoc($result)) {
	 ?>
	 	<tr>
	 	<td><?php echo $row['name'] ?></td>

	 	<td>
	 		<?php echo'<a href="./edit_instructor.php?name='. $row['name'] . '&id='. $row['id'] . '"><button>EDIT</button></a>' ?>
	 		<?php echo'<a href="./controllers/delete_instructor.php?id='. $row['id'] .'"><button>DELETE</button></a>' ?>
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
