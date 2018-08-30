<?php 
	include_once "./partials/header.php";
?>
</head>
<body>
	<h1>Wanbol U - Add Instructor</h1>
	<div id ="addinstructorApp">
		<form action="./controllers/add_instructor.php" method="POST">
			<h3>Enter new instructor</h3>
			<input type="text" name="course" placeholder = "Instructor Name" required>
			<button type="submit">SUBMIT</button>
		</form>
	</div>
	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>