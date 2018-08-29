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
	<h1>Enroll To Course</h1>
	
	<form action="./controllers/enroll_to_course.php" method="POST">
		<h2>SELECT COURSE</h2>
		<?php 
			$sql = "SELECT * from courses ORDER BY name";
			$results = mysqli_query($conn, $sql);
			echo '<select name = course>';
			while($row = mysqli_fetch_assoc($results)) {
				echo '<option value = "' . $row['id'] .'">' . $row['name'] . '</option>';
			};
			echo '</select>';
		?>
		<h2>SELECT STUDENT</h2>
		<?php 

			$sql = "SELECT * from students ORDER BY first_name";
			$results = mysqli_query($conn, $sql);
			echo '<select name = student>';
			while($row = mysqli_fetch_assoc($results)) {
				echo '<option value = "' . $row['id'] .'">' . $row['first_name'] . " " . $row['last_name'] . '</option>';
			};
			echo '</select>';
		?>
		<br>
		<br>
		
		<button type="submit">SUBMIT</button>

	</form>

</body>
</html>