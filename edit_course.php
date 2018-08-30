<?php 
	include_once "./partials/header.php";
?>
</head>
<body>
	<h1>Wanbol U - Edit Course</h1>
	<div id ="editcourseApp">
		<form action="./controllers/edit_course.php" method="POST">
			
			<input type="text" name="newCourse" placeholder = "Course Name" required>
			<div>
			<?php 
				$course_id = $_GET['id'];
				$sql = "SELECT * from instructors ORDER BY name";
				$results = mysqli_query($conn, $sql);
				echo '<select name = instructor>';
				while($row = mysqli_fetch_assoc($results)) {
					echo '<option value = "' . $row['id'] .'">' . $row['name'] . '</option>';
				};
				echo '</select>';
			?>
			<input type="hidden" value = "<?php echo $course_id ?>" name="course_id">
			</div>
			
			<button type="submit">SUBMIT</button>

		</form>
	</div>
	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>