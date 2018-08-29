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
	<h1>Wanbol U - Edit Instructor</h1>
	
	<form action="./controllers/edit_instructor.php" method="POST">
		
		<h3><?php echo $_GET['name']?></h3>

		<input type="hidden" name="id" value = "<?php echo $_GET['id'] ?>">
		<input type="text" name="instructor">
		
		<button type="submit">SUBMIT</button>

	</form>

</body>
</html>