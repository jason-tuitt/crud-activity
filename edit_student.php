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
	<h1>Wanbol U - Edit Student</h1>
	
	<form action="./controllers/edit_student.php" method="POST">
		<?php  
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$dob = $_GET['dob'];
		?>
		
		<input type="hidden" name="id" value = "<?php echo $_GET['id'] ?>">

		<h3><?php echo $firstname ?></h3>
		<input type="text" name="firstname" required>
		
		<h3><?php echo $lastname ?></h3>
		<input type="text" name="lastname" required>

		<h3><?php echo $dob ?></h3>
		<input type="date" name="dob" min = "1970-01-01" max = "2018-12-12" required>

		<button type="submit">SUBMIT</button>

	</form>

</body>
</html>