<?php 
	include_once "./partials/header.php";
?>

</head>
<body>
	<h1>Enroll To Course</h1>
	<div id ="enrolltocourseApp">
		<a href="./enrollment.php"><button>VIEW ENROLLMENT</button></a>

		
		<form action="./controllers/enroll_to_course.php" method="POST">
			<h2>Select Course</h2>
			<?php 
				$sql = "SELECT * from courses ORDER BY name";
				$results = mysqli_query($conn, $sql);
				echo '<select name = course>';
				while($row = mysqli_fetch_assoc($results)) {
					echo '<option value = "' . $row['id'] .'">' . $row['name'] . '</option>';
				};
				echo '</select>';
			?>
			<h2>Select Student</h2>
			<?php 

				$sql = "SELECT * from students ORDER BY first_name";
				$results = mysqli_query($conn, $sql);
				echo '<select name = student>';
				while($row = mysqli_fetch_assoc($results)) {
					echo '<option value = "' . $row['id'] .'">' . $row['first_name'] . " " . $row['last_name'] . '</option>';
				};
				echo '</select>';
			?>

			<button type="submit">SUBMIT</button>

		</form>
	</div>
	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>