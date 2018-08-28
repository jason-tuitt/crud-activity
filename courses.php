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
	<h1>Wanbol U - Courses</h1>

	<?php 
	$sql = 'SELECT * FROM courses';

	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0) {
		echo '<table>';
		echo '<tr>';
	?>
		<th>Course Name</th>
		<th>Instructor</th>
		<th>Edit/Delete</th>

	<?php
		echo '</tr>';
		while($row = mysqli_fetch_assoc($result)) {
	 ?>
	 	<tr>
	 	<td><?php echo $row['name'] ?></td>
	 	<td><?php 

	 	// $sql_convert = 'select name from instructors where id ='. $row['id'];

	 	// // $row['instructors_id']; 
	 	// $instructor = mysqli_query($conn, $sql_convert);
	 	// $i = mysqli_fetch_assoc($instructor);
	 	// echo($i['name']);

	 	$sql_convert = 'SELECT c.id, c.name as course_name, i.name as instructor_name FROM courses c JOIN instructors i ON (c.instructors_id = i.id) where c.id =' . $row['id'];

	 	$instructor = mysqli_query($conn, $sql_convert);
	 	$i = mysqli_fetch_assoc($instructor);
	 	echo($i['instructor_name']);
	 	?>
	 	<td>
	 		<?php echo'<a href="./edit_course.php?id='. $row['id'] .'"><button>EDIT</button></a>' ?>
	 		<?php echo'<a href="./controllers/delete.php?id='. $row['id'] .'"><button>DELETE</button></a>' ?>
	 	</td>
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
