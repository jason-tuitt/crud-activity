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
	<h1>Wanbol U - Add Student</h1>
	
	<form action="./controllers/add_student.php" method="POST">
		<h3>Enter new student</h3>
		<input type="text" name="firstname" required>
		<input type="text" name="lastname" required>
		<input type="date" name="dob" min = "1970-01-01" max = "2018-12-12" required>
		<button type="submit">SUBMIT</button>
	</form>

</body>
</html>