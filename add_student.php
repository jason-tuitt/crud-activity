<?php 
	include_once "./partials/header.php";
?>
</head>
<body>
	<h1>Wanbol U - Add Student</h1>
	<div id ="addstudentApp">
		<form action="./controllers/add_student.php" method="POST">
			<h3>Enter new student</h3>
			<input type="text" name="firstname" placeholder = "First Name" required>
			<input type="text" name="lastname" placeholder = "Last Name" required>
			<input type="date" name="dob" min = "1970-01-01" max = "2018-12-12" required>
			<button type="submit">SUBMIT</button>
		</form>
	</div>
	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>