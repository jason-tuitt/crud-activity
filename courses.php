<?php 
	include_once "./partials/header.php";
?>

</head>
<body>
	<h1>Wanbol U - Courses</h1>
	<div id ="coursesApp">
		<a href="./add_course.php"><button>ADD NEW COURSE</button></a>
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
		 		<?php echo'<a href="./controllers/delete_course.php?id='. $row['id'] .'"><button>DELETE</button></a>' ?>
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
	</div>
	<script src="./assets/js/add_css_buttons.js"></script>
<?php 
	include_once "./partials/footer.php"
?>