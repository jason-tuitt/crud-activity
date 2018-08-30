<?php 
	include_once "./partials/header.php";
?>

</head>
<body>
	<h1>Wanbol U - Add Course</h1>
	<div id ="addcourseApp">
		<form action="./controllers/add_course.php" method="POST">
			<h3>Enter new course</h3>
			<input type="text" name="course" placeholder = "Course Name" required>
			<?php 
				$sql = "SELECT * from instructors ORDER BY name";
				$results = mysqli_query($conn, $sql);
				echo '<select name = instructor>';
				while($row = mysqli_fetch_assoc($results)) {
					echo '<option value = "' . $row['id'] .'">' . $row['name'] . '</option>';
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