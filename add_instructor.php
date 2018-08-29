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
	<h1>Wanbol U - Add Instructor</h1>
	
	<form action="./controllers/add_instructor.php" method="POST">
		<h3>Enter new instructor</h3>
		<input type="text" name="course">
		<button type="submit">SUBMIT</button>
	</form>

</body>
</html>