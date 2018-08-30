<?php 
	include_once "./partials/header.php";
?>
</head>
<body>
	<h1>Wanbol U - Edit Instructor</h1>
	<div id ="editinstructorApp">
		
		<form action="./controllers/edit_instructor.php" method="POST">
			
			<h3><?php echo $_GET['name']?></h3>

			<input type="hidden" name="id" value = "<?php echo $_GET['id'] ?>">
			<input type="text" name="instructor" placeholder = "Instructor Name" required>
			
			<button type="submit">SUBMIT</button>

		</form>
	</div>
	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>