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
	<h1>Wanbol U - Edit Course</h1>
	
	<form action="./controllers/edit_course.php" method="POST">
		
		<input type="text" name="newCourse">
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

</body>
</html>