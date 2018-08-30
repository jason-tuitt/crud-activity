<?php 
	include_once "./partials/header.php";
?>

</head>
<body>
	<h1>Wanbol U - List of Courses and Students</h1>

	<div id ="enrollmentApp">

		<form action="./enrollment.php" method="GET">
		<?php 
			$sql = "SELECT * from courses ORDER BY name";
			$results = mysqli_query($conn, $sql);
			echo '<select name = course>';
			while($row = mysqli_fetch_assoc($results)) {
				echo '<option value = "' . $row['id'] .'">' . $row['name'] . '</option>';
			};
			echo '</select>';
		?>
		<button type="submit">Search Course</button>
		</form>

		<?php 

		

		if(isset( $_GET['course'])) {

		$filter = $_GET['course'];

			$sql = "SELECT c.id, s.first_name as firstname, s.last_name as lastname, s.date_of_birth as dob, c.courses_id FROM students_courses c JOIN students s ON (c.students_id = s.id) where courses_id=$filter";


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
			 	<td><?php echo $row['firstname'] ?></td>
			 	<td><?php echo($row['lastname'])?></td>
			 	<td><?php echo($row['dob'])?></td>

				</tr>
				<?php 
				} 
				echo '</table>';
			} 

			else {
				echo 'No students enrolled';
			}

			

		} else {

			
			$sql = "SELECT c.id, s.first_name as firstname, s.last_name as lastname, s.date_of_birth as dob, c.courses_id FROM students_courses c JOIN students s ON (c.students_id = s.id)";

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
			 	<td><?php echo $row['firstname'] ?></td>
			 	<td><?php echo($row['lastname'])?></td>
			 	<td><?php echo($row['dob'])?></td>

				</tr>
				<?php 
				} 
				echo '</table>';
			} 

			else {
				echo 'No students available';
			}

		}

		?>
	</div>

	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>
